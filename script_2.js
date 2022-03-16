window.onload = function()
{
    document.getElementsByClassName("second_2")[0].addEventListener("click",log_Package);
}

function log_Package()
{
    fetch("./package_decision.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementsByClassName("Entry")[0].addEventListener("click",entry);
        document.getElementsByClassName("View")[0].addEventListener("click",view);
    });
}

function entry()
{
    fetch("./log_package.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementsByClassName("sibtn3")[0].addEventListener("click",submit);
    });
}

function submit()
{
    id = document.getElementsByTagName("input")[0].value;
    description = document.getElementsByTagName("input")[1].value;
    name_package = document.getElementsByTagName("input")[2].value;
    date_arrived = document.getElementsByTagName("input")[3].value;
    weight = document.getElementsByTagName("input")[4].value;
    stat = document.getElementsByTagName("input")[5].value;

    httpRequest = new XMLHttpRequest();

    const pack = [id,description,name_package,date_arrived,weight];

    var url = "Arrived_Packages.php";

    httpRequest.onreadystatechange = processName;
    httpRequest.open('POST', url);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send('pack=' + encodeURIComponent(pack) + "&stat=" + encodeURIComponent(stat));

    function processName()
    {
        if (httpRequest.readyState === XMLHttpRequest.DONE) 
        {
            if (httpRequest.status === 200) 
            {
                let response = httpRequest.responseText;
                let answer = document.getElementsByClassName("content")[0].innerHTML = data;
                console.log(response);
                answer.innerHTML = response;

            } 
            else 
            {
            alert('There was a problem with the request.');
            }
        }
    }
}

function view()
{
    fetch("./Arrived_Packages.php")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
    });
}