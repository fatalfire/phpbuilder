window.onload = function(){
    /*GoogleDoc*/
    let getJSON = function(url, callback){
        let xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.responseType = "json";
        xhr.onload = function(){
            let status = xhr.status;
            if(status === 200){
                callback(null, xhr.response);
            }else{
                callback(status, xhr.response);
            }
        };
        xhr.send();
    };

    getJSON("https://spreadsheets.google.com/feeds/list/1MFDyCPZSExwL2lZzjNnHqwhiLAnqIPLV1BE2y0ru2n0/od6/public/values?alt=json", function(err, data){
        if(err !== null){
            alert("Error" + err);
        }else{
            data = data["feed"]["entry"];
            console.log(data);
            document.querySelector(".showGoods").innerHTML = showGoods(data);
        }
    });

    function showGoods(data){
        let out = "";
        for(var i = 0; i<data.length; i++){
            out += "<div><p>" + data[i]['gsx$id']['$t'] + "</p><p>" + data[i]['gsx$text']['$t'] + "</p></div>";
        }
        return out;
    }


    /*TimeConverter*/
    function timeConverter (unixTime){
        let timeNow = new Date(unixTime * 1000);
        let months = ["Січня", "Лютого", "Березня", "Квітня", "Травня", "Червня", "Липня", "Серпня", "Вересня", "Жовтня", "Листопада", "Грудня"];
        let year = timeNow.getFullYear();
        let month = months[timeNow.getMonth()];
        let date = timeNow.getDate();
        let hour = timeNow.getHours();
        let min = timeNow.getMinutes();
        let sec = timeNow.getSeconds();
        let time = date + " " + month + " " + year + " року " + hour + " годин " + min + " хвилин " + sec + " секунд";
        return time;
    }
    console.log(timeConverter(Date.now() / 1000));
};