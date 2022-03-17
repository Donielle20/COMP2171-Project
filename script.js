window.onload = function()
{
    document.getElementsByClassName("first")[0].addEventListener("click",home);
    document.getElementsByClassName("second")[0].addEventListener("click",signup);
    document.getElementsByClassName("third")[0].addEventListener("click",services);
    document.getElementsByClassName("fourth")[0].addEventListener("click",aboutus);
    document.getElementsByClassName("fifth")[0].addEventListener("click",contact);
    document.getElementsByClassName("sixth")[0].addEventListener("click",signIn);
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
    else if (document.getElementById("sixth").classList.contains("light"))
    {
        document.getElementById("sixth").classList.remove("light");
    }
}
function signup()
{
    fetch("./decision.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
            document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementsByClassName("Individual")[0].addEventListener("click",Iaccount);
        document.getElementsByClassName("Courier")[0].addEventListener("click",Caccount);
    });

    document.getElementById("second").classList.add("light");

    if (document.getElementById("first").classList.contains("light"))
    {
        document.getElementById("first").classList.remove("light");
    }
    else if (document.getElementById("sixth").classList.contains("light"))
    {
        document.getElementById("sixth").classList.remove("light");
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
function signIn()
{
    fetch("./decision_2.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementsByClassName("Customer")[0].addEventListener("click",CSaccount);
        document.getElementsByClassName("Admin")[0].addEventListener("click",Aaccount);
        // document.getElementById("Submit_SI_Btn").addEventListener("click",signin);
    });

    document.getElementById("sixth").classList.add("light");

    if (document.getElementById("first").classList.contains("light"))
    {
        document.getElementById("first").classList.remove("light");
    }
    else if (document.getElementById("second").classList.contains("light"))
    {
        document.getElementById("second").classList.remove("light");
    }
}

function CSaccount()
{
    fetch("./Sign_In.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
    });

    document.getElementById("sixth").classList.add("light");

    if (document.getElementById("first").classList.contains("light"))
    {
        document.getElementById("first").classList.remove("light");
    }
    else if (document.getElementById("second").classList.contains("light"))
    {
        document.getElementById("second").classList.remove("light");
    }
}

function Aaccount()
{
    fetch("./Sign_In_2.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
    });
}

function Iaccount()
{
    fetch("./SignUp.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementById("SubmitBtn").addEventListener("click",send);
        document.getElementsByClassName("sign_in_btn_1")[0].addEventListener("click",enter);
    });
}
function Caccount()
{
    fetch("./courierS.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;
        document.getElementById("SubmitCBtn").addEventListener("click",Csend);
    });
}

function Csend()
{
    let pic = document.getElementsByTagName("input")[7].value;
    let response = document.getElementById("response");

    var img = new Image();
    img.src = pic;
    response.appendChild(img);
}

function Customer(fname,lname,email,pass,address,parish,phone)
{
    this.fname = fname;
    this.lname = lname;
    this.email = email;
    this.pass = pass;
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
    this.getPass = function()
    {
        return this.pass;
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
    let status = false;
    let state = "up";
    let fname = document.getElementsByTagName("input")[0].value;
    let lname = document.getElementsByTagName("input")[1].value;
    let email = document.getElementsByTagName("input")[2].value;
    let pass = document.getElementsByTagName("input")[3].value;
    let cpass = document.getElementsByTagName("input")[4].value;
    let address = document.getElementsByTagName("input")[5].value;
    let parish = document.getElementsByTagName("input")[6].value;
    let phone = document.getElementsByTagName("input")[7].value;

    // alert(user);

    const c1 = new Customer(fname,lname,email,pass,address,parish,phone);

    httpRequest = new XMLHttpRequest();

    const user = [c1.getFname(),c1.getLname(),c1.getEmail(),c1.getPass(),c1.getAddress(),c1.getParish(),c1.getPhone()];

    
    var url = "swift.php";
    
    httpRequest.onreadystatechange = processName;
    httpRequest.open('POST', url);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send('user=' + encodeURIComponent(user) + "&state=" + encodeURIComponent(state));

    function processName()
    {
        if (httpRequest.readyState === XMLHttpRequest.DONE) 
        {
            if (httpRequest.status === 200) 
            {
                let response = httpRequest.responseText;
                if (response == "Success")
                {
                    alert("Account Creation Successfull");
                    CSaccount();
                }
            } 
            else 
            {
            alert('There was a problem with the request.');
            }
        }
    }
}
function enter()
{
    fetch("./Sign_In.html")
        .then(response => {
            return response.text()
        })
        .then(data => {
        document.getElementsByClassName("content")[0].innerHTML = data;

        document.getElementById("sixth").classList.add("light");

        if (document.getElementById("first").classList.contains("light"))
        {
            document.getElementById("first").classList.remove("light");
        }
        else if (document.getElementById("second").classList.contains("light"))
        {
            document.getElementById("second").classList.remove("light");
        }
    });
}
function signin()
{
    let state = "up";
    let mail = document.getElementsByTagName("input")[0].value;
    let passw = document.getElementsByTagName("input")[1].value;

    console.log(mail,passw);
}