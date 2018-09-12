
    // This will happen every time the user change the selected category
    function categorySelected()
    {
        catsEl = document.getElementById("category");
        id = catsEl.options[catsEl.selectedIndex].value;
        if(id != "none")
        {
            document.getElementById("result").innerHTML = "loading...";
            params = "categoryId="+id;
            http = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
            http.open("POST", document.URL, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.setRequestHeader("X-Requested-With","XMLHttpRequest");
            http.setRequestHeader("Content-length", params.length);
            http.setRequestHeader("Connection", "close");
            http.onreadystatechange = function()
            {
                if(http.readyState == 4)
                {
                    if(http.status == 200)
                    {
                        response = http.responseText;
                        r = eval("(" + response + ")");
                        document.getElementById("result").innerHTML = r["HTML"];
                    }
                    else
                    {
                        document.getElementById("result").innerHTML = "Sorry this service is currently unavailable";
                    }
                }
            }
            http.send(params);
        }
    }

