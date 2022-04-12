window.onload = function()
{
    home()
};

function home()
{
    fetch("./home.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content_3")[0].innerHTML = data;
    
    });
    document.getElementById("first_1").classList.add("light");

    if (document.getElementById("second_1").classList.contains("light"))
    {
        document.getElementById("second_1").classList.remove("light");
    }
    else if (document.getElementById("sixth_1").classList.contains("light"))
    {
        document.getElementById("sixth_1").classList.remove("light");
    }
}