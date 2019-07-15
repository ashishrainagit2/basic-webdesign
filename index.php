<?php 
error_reporting(E_ALL);
    ini_set('display_errors',true);
echo("hello"); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <title>Digital Marketing</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/normalize.css?01">
        <link rel="stylesheet" href="./css/contact.css?06">
        <link rel="stylesheet" href="./css/common.css?06">
        <link rel="stylesheet" href="./css/wow.css?06">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script language="javascript" type="text/javascript">
            $(function(){
            new WOW().init(); 
            });
        </script>
        <script src="./js/contactus.js"></script>

    </head>
    <body>
        <div class="wrapper">
                <div class="overlay">
                        &nbsp;
                    </div>
                <div class="row">
                        <div class="burger">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                        </div>
                        <div class="sidebar">
                            <ul>
                                <li ><a href="index.html" class="active">Home</a></li>
                                <li><a href="aboutus.html">About us</a></li>
                                <li><a href="contactus.html">Contact Us</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </div>
                        <div class="popup">
                            <h2> Success!</h2>
                            <p>Thank you for your response! We will get back to you!</p>
                        </div>
                    <div class="container firstcont">
                        <nav>
                            <span class="logowrapper"> <a href="index.html"><img src="./images/Icon.png" alt="logo"></a> </span>
                            <span class="navbar">
                                <ul>
                                    <li><a href="index.html" >Home</a></li>
                                    <li><a href="aboutus.html" >About Us</a></li>
                                    <li><a href="contactus.html" class="active">Contact Us</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </span>
                        </nav>
                    </div>
                </div>
        </div>
        <div class="row contactusbanner">
                <div class="container">
                    <div class="firstview">
                        <span class="firstviewcontent">
                            <div class="maintext one"> 
                                <span class="digital">Contact us</span> 
                            </div>
                            <!-- <div class="maintext two"> 
                                    <span class="marketing"> Marketing</span>  
                            </div> -->
                            <div class="tagline">Build Your Brand Get New Business  Manage Clients  Do It Yourself</div>
                        </span>
                        <span class="firstviewimage"><img src="./images/Contanct-us.png" alt="main_image" class="main_image"></span>
                    </div>
                </div>
            </div>

            <div class="row formrow">
                <div class="container">
                    <div class="formcontact">
                        <div class="headingform">Please fill out the quick form and we will be in touch with lightning speed</div>
                            <div class="formwrapper">
                                <form action="" method="POST">
                                    <input type="text" placeholder="Name" name="name" id="name"> 
                                    <div id="head" class="errordiv"></div>   <br />
                                    <input type="text" placeholder="Your email address" name="email" id="email">
                                    <div  id="head2" class="errordiv"></div> <br />
                                    <textarea name="message" id="message" cols="30" rows="5" placeholder="message"></textarea>
                                    <div id="head3" class="errordiv"></div>
                                    <!-- adding button -->
                                    <div class="contactus">
                                            <div class="contactbuttonback"> Contact  us</div>
                                            <div class="contactbutton" onclick="toggleContactInfoDiv();"> 
                                                <span class="contacttext">Submit</span>    
                                                <span class="contactimg">
                                                        <?xml version="1.0" encoding="UTF-8"?>
                                                        <svg width="28px" height="27px" viewBox="0 0 28 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="transparent" fill-rule="evenodd">
                                                                <g id="Digital-Marketing-home-page" transform="translate(-369.000000, -459.000000)" stroke="white">
                                                                    <g id="Group-4" transform="translate(210.000000, 429.000000)">
                                                                        <g id="Group-3" transform="translate(10.000000, 10.000000)">
                                                                            <g id="Group-6" transform="translate(150.000000, 21.000000)">
                                                                                <ellipse id="Oval" cx="13" cy="12.5" rx="13" ry="12.5"></ellipse>
                                                                                <g id="Group-7" transform="translate(5.000000, 8.000000)">
                                                                                    <path d="M6.08081656,0.0147308507 C11.4141499,2.42590512 14.0808166,3.75436579 14.0808166,4.00011287 C14.0808166,4.24585994 11.4141499,5.58406593 6.08081656,8.01473085" id="Path"></path>
                                                                                    <path d="M13.5,4.01473085 L0.486217747,4.01473085" id="Line" stroke-linecap="square"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        
                                                </span>
                                            </div>
                                            <div class="contactusinfo">
                                                <div class="closediv" onclick="toggleContactInfoDiv();">X</div>
                                                <div class="contactemail">
                                                    <p> You can Email us on</p>   
                                                    <div class="email-env">
                                                            <?xml version="1.0" encoding="iso-8859-1"?>
                                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                               viewBox="0 0 31.012 31.012" style="enable-background:new 0 0 31.012 31.012;" xml:space="preserve" width="20px" height="20px" stroke="white">
                                                               <g>
                                                                  <g>
                                                                     <path d="M25.109,21.51c-0.123,0-0.246-0.045-0.342-0.136l-5.754-5.398c-0.201-0.188-0.211-0.505-0.022-0.706
                                                                        c0.189-0.203,0.504-0.212,0.707-0.022l5.754,5.398c0.201,0.188,0.211,0.505,0.022,0.706C25.375,21.457,25.243,21.51,25.109,21.51z
                                                                        "/>
                                                                     <path d="M5.902,21.51c-0.133,0-0.266-0.053-0.365-0.158c-0.189-0.201-0.179-0.518,0.022-0.706l5.756-5.398
                                                                        c0.202-0.188,0.519-0.18,0.707,0.022c0.189,0.201,0.179,0.518-0.022,0.706l-5.756,5.398C6.148,21.465,6.025,21.51,5.902,21.51z"/>
                                                                  </g>
                                                                  <path d="M28.512,26.529H2.5c-1.378,0-2.5-1.121-2.5-2.5V6.982c0-1.379,1.122-2.5,2.5-2.5h26.012c1.378,0,2.5,1.121,2.5,2.5v17.047
                                                                     C31.012,25.408,29.89,26.529,28.512,26.529z M2.5,5.482c-0.827,0-1.5,0.673-1.5,1.5v17.047c0,0.827,0.673,1.5,1.5,1.5h26.012
                                                                     c0.827,0,1.5-0.673,1.5-1.5V6.982c0-0.827-0.673-1.5-1.5-1.5H2.5z"/>
                                                                  <path d="M15.506,18.018c-0.665,0-1.33-0.221-1.836-0.662L0.83,6.155C0.622,5.974,0.6,5.658,0.781,5.449
                                                                     c0.183-0.208,0.498-0.227,0.706-0.048l12.84,11.2c0.639,0.557,1.719,0.557,2.357,0L29.508,5.419
                                                                     c0.207-0.181,0.522-0.161,0.706,0.048c0.181,0.209,0.16,0.524-0.048,0.706L17.342,17.355
                                                                     C16.835,17.797,16.171,18.018,15.506,18.018z"/>
                                                               </g>
                                                            </svg>
                                                    </div>
                                                    <p>loharshoaib1@gmail.com</p>
                                                </div>
                                                <div class="contactnumber">
        
                                                    <p> You can call us on</p>   
                                                    <div class="email-env">
                                                            <?xml version="1.0" encoding="iso-8859-1"?>
                                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                               viewBox="0 0 31.012 31.012" style="enable-background:new 0 0 31.012 31.012;" xml:space="preserve" width="20px" height="20px" stroke="white">
                                                               <g>
                                                                  <g>
                                                                     <path d="M25.109,21.51c-0.123,0-0.246-0.045-0.342-0.136l-5.754-5.398c-0.201-0.188-0.211-0.505-0.022-0.706
                                                                        c0.189-0.203,0.504-0.212,0.707-0.022l5.754,5.398c0.201,0.188,0.211,0.505,0.022,0.706C25.375,21.457,25.243,21.51,25.109,21.51z
                                                                        "/>
                                                                     <path d="M5.902,21.51c-0.133,0-0.266-0.053-0.365-0.158c-0.189-0.201-0.179-0.518,0.022-0.706l5.756-5.398
                                                                        c0.202-0.188,0.519-0.18,0.707,0.022c0.189,0.201,0.179,0.518-0.022,0.706l-5.756,5.398C6.148,21.465,6.025,21.51,5.902,21.51z"/>
                                                                  </g>
                                                                  <path d="M28.512,26.529H2.5c-1.378,0-2.5-1.121-2.5-2.5V6.982c0-1.379,1.122-2.5,2.5-2.5h26.012c1.378,0,2.5,1.121,2.5,2.5v17.047
                                                                     C31.012,25.408,29.89,26.529,28.512,26.529z M2.5,5.482c-0.827,0-1.5,0.673-1.5,1.5v17.047c0,0.827,0.673,1.5,1.5,1.5h26.012
                                                                     c0.827,0,1.5-0.673,1.5-1.5V6.982c0-0.827-0.673-1.5-1.5-1.5H2.5z"/>
                                                                  <path d="M15.506,18.018c-0.665,0-1.33-0.221-1.836-0.662L0.83,6.155C0.622,5.974,0.6,5.658,0.781,5.449
                                                                     c0.183-0.208,0.498-0.227,0.706-0.048l12.84,11.2c0.639,0.557,1.719,0.557,2.357,0L29.508,5.419
                                                                     c0.207-0.181,0.522-0.161,0.706,0.048c0.181,0.209,0.16,0.524-0.048,0.706L17.342,17.355
                                                                     C16.835,17.797,16.171,18.018,15.506,18.018z"/>
                                                               </g>
                                                            </svg>
                                                    </div>
                                                    <p>9029902929</p>
        
                                                </div>
                                            </div>
                                        </div>
                                    <!-- ending button -->
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row footerrow">
                    <div class="container">
                        <div class="footer">
                            <div class="footercontent">
                                <div class="footercol footercol1">
                                    <h2>About Us</h2>
                                    <p>Blog</p>
                                    <p>Products</p>
                                    <p>Clients</p>
                                </div>
                                <div class="footercol footercol2">
                                    <h2>Contact Us</h2>
                                    <p>Email</p>
                                    <p>Skype</p>
                                    <p>Call</p>
                                </div>
                                <div class="footercol footercol3">
                                    <div class="fimage1">
                                        <svg width="37px" height="37px" viewBox="0 0 37 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Digital-Marketing-home-page" transform="translate(-806.000000, -2484.000000)">
                                                    <g id="Group-12" transform="translate(0.000000, 2385.000000)">
                                                        <g id="Group-11" transform="translate(200.000000, 100.000000)">
                                                            <g id="Group-16" transform="translate(607.000000, 0.000000)">
                                                                <circle id="Oval" stroke="#FFFFFF" cx="17.5" cy="17.5" r="17.5"></circle>
                                                                <g id="icons8-facebook-(1)" transform="translate(7.000000, 7.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <path d="M10.5,0 C16.3145364,0 21,4.71539565 21,10.5670758 C21,15.869723 17.1482351,20.2267265 12.0996094,21 L12.0996094,13.7170762 L15.1552734,13.7170762 L15.6346431,10.592874 L12.0996094,10.592874 L12.0996094,8.88501135 C12.0996094,7.58658256 12.5199165,6.4341522 13.7274165,6.4341522 L15.6654054,6.4341522 L15.6654054,3.70724801 C15.3241554,3.66101705 14.6039827,3.56019645 13.2429202,3.56019645 C10.4000452,3.56019645 8.73376481,5.07128829 8.73376481,8.51351259 L8.73376481,10.592874 L5.8114014,10.592874 L5.8114014,13.7170762 L8.73376481,13.7170762 L8.73376481,20.9742005 C3.76725628,20.1313956 0,15.8113003 0,10.5670758 C0,4.71539565 4.68546409,0 10.5,0 Z" id="Shape"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="fimage2">
                                        <svg width="37px" height="37px" viewBox="0 0 37 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Digital-Marketing-home-page" transform="translate(-806.000000, -2534.000000)">
                                                    <g id="Group-12" transform="translate(0.000000, 2385.000000)">
                                                        <g id="Group-11" transform="translate(200.000000, 100.000000)">
                                                            <g id="Group-17" transform="translate(607.000000, 50.000000)">
                                                                <circle id="Oval-Copy" stroke="#FFFFFF" cx="17.5" cy="17.5" r="17.5"></circle>
                                                                <g id="twitter-circular-button" transform="translate(7.000000, 8.400000)" fill="#FFFFFF">
                                                                    <path d="M18.2187647,5.48153072 C18.2187647,5.29786536 18.2154706,5.11586536 18.2072941,4.93553072 C18.9845882,4.3498 19.6587647,3.6168634 20.1922353,2.77799804 C19.4787647,3.1023268 18.7129412,3.31906144 17.9078235,3.41000196 C18.7292941,2.8987366 19.3592941,2.08140196 19.6571176,1.10026732 C18.888,1.57180196 18.0371176,1.90933464 17.1321765,2.08473268 C16.4072941,1.25080392 15.3731176,0.71973268 14.2292353,0.69986732 C12.0332353,0.66346732 10.2528824,2.53973268 10.2528824,4.89080392 C10.2528824,5.22500588 10.2872353,5.54933464 10.3559412,5.86200588 C7.04888235,5.6469366 4.11817647,3.90633856 2.15776471,1.28226732 C1.81576471,1.911 1.61941176,2.64560196 1.61941176,3.43319804 C1.61941176,4.9223268 2.32141176,6.24593072 3.38829412,7.02686536 C2.73541176,6.9971268 2.12341176,6.7969268 1.58670588,6.46926732 C1.58670588,6.48746732 1.58670588,6.50566732 1.58670588,6.52386732 C1.58670588,8.60532876 2.958,10.349198 4.77758824,10.7562 C4.44376471,10.8521366 4.09194118,10.9018 3.73029412,10.9001941 C3.47341176,10.8985288 3.22464706,10.8703961 2.98247059,10.817402 C3.48811765,12.5232654 4.95758824,13.7691327 6.697,13.8104693 C5.33552941,14.9520732 3.62064706,15.6337405 1.75847059,15.6288039 C1.43770588,15.6288039 1.12029412,15.6073327 0.809352941,15.567602 C2.57011765,16.7886673 4.65970588,17.5000732 6.90641176,17.5000732 C14.2194118,17.501798 18.2187647,11.0656 18.2187647,5.48153072 Z" id="Path"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="fimage3">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg width="37px" height="37px" viewBox="0 0 37 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Digital-Marketing-home-page" transform="translate(-806.000000, -2584.000000)">
                                                    <g id="Group-12" transform="translate(0.000000, 2385.000000)">
                                                        <g id="Group-11" transform="translate(200.000000, 100.000000)">
                                                            <g id="Group-18" transform="translate(607.000000, 100.000000)">
                                                                <circle id="Oval-Copy-2" stroke="#FFFFFF" cx="17.5" cy="17.5" r="17.5"></circle>
                                                                <g id="Insta" transform="translate(7.000000, 7.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g id="icons8-instagram">
                                                                        <path d="M5.83333333,0 C2.61683333,0 0,2.61683333 0,5.83333333 L0,15.1666667 C0,18.3831667 2.61683333,21 5.83333333,21 L15.1666667,21 C18.3831667,21 21,18.3831667 21,15.1666667 L21,5.83333333 C21,2.61683333 18.3831667,0 15.1666667,0 L5.83333333,0 Z M5.83333333,2.33333333 L15.1666667,2.33333333 C17.0963333,2.33333333 18.6666667,3.90366667 18.6666667,5.83333333 L18.6666667,15.1666667 C18.6666667,17.0963333 17.0963333,18.6666667 15.1666667,18.6666667 L5.83333333,18.6666667 C3.90366667,18.6666667 2.33333333,17.0963333 2.33333333,15.1666667 L2.33333333,5.83333333 C2.33333333,3.90366667 3.90366667,2.33333333 5.83333333,2.33333333 Z M16.3333333,3.5 C15.6890011,3.5 15.1666667,4.02233446 15.1666667,4.66666667 C15.1666667,5.31099887 15.6890011,5.83333333 16.3333333,5.83333333 C16.9776655,5.83333333 17.5,5.31099887 17.5,4.66666667 C17.5,4.02233446 16.9776655,3.5 16.3333333,3.5 Z M10.5,4.66666667 C7.2835,4.66666667 4.66666667,7.2835 4.66666667,10.5 C4.66666667,13.7165 7.2835,16.3333333 10.5,16.3333333 C13.7165,16.3333333 16.3333333,13.7165 16.3333333,10.5 C16.3333333,7.2835 13.7165,4.66666667 10.5,4.66666667 Z M10.5,7 C12.4296667,7 14,8.57033333 14,10.5 C14,12.4296667 12.4296667,14 10.5,14 C8.57033333,14 7,12.4296667 7,10.5 C7,8.57033333 8.57033333,7 10.5,7 Z" id="Shape"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="copyright">
                                    <p>Lorem Ipsum is simply dummy text of@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
</body>
</html>