window.onload = function()
{
    document.getElementsByClassName("first")[0].addEventListener("click",home);
    document.getElementsByClassName("second")[0].addEventListener("click",signup);
    document.getElementsByClassName("third")[0].addEventListener("click",services);
    document.getElementsByClassName("fourth")[0].addEventListener("click",aboutus);
    document.getElementsByClassName("fifth")[0].addEventListener("click",contact);
};

function home()
{
    fetch("./home.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
    
    });
    document.getElementById("first").classList.add("light");

    if (document.getElementById("second").classList.contains("light"))
    {
        document.getElementById("second").classList.remove("light");
    }
}
function signup()
{
    fetch("./SignUp.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementById("SubmitBtn").addEventListener("click",send);
    });

    document.getElementById("second").classList.add("light");

    if (document.getElementById("first").classList.contains("light"))
    {
        document.getElementById("first").classList.remove("light");
    }
}
function services()
{
    alert("Services");
}
function aboutus()
{
    alert("AboutUs");
}
function contact()
{
    alert("Contact");
}

function Customer(fname,lname,email,address,parish,phone)
{
    this.fname = fname;
    this.lname = lname;
    this.email = email;
    this.address = address;
    this.parish = parish;
    this.phone = phone;

    this.getFname = function()
    {
        return this.fname;
    }
    this.getLname = function()
    {
        return this.lname;
    }
    this.getEmail = function()
    {
        return this.email;
    }
    this.getAddress = function()
    {
        return this.address;
    }
    this.getParish = function()
    {
        return this.parish;
    }
    this.getPhone = function()
    {
        return this.phone;
    }
}

function send()
{
    let fname = document.getElementsByTagName("input")[0].value;
    let lname = document.getElementsByTagName("input")[1].value;
    let email = document.getElementsByTagName("input")[2].value;
    let address = document.getElementsByTagName("input")[3].value;
    let parish = document.getElementsByTagName("input")[4].value;
    let phone = document.getElementsByTagName("input")[5].value;

    const c1 = new Customer(fname,lname,email,address,parish,phone);

    let httpRequest = new XMLHttpRequest();

    const user = [c1.getFname(),c1.getLname(),c1.getEmail(),c1.getAddress(),c1.getParish(),c1.getPhone()];

    var url = "";
}