@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <html>
<head>
<meta name="viewport" content="width=device-width, initial-scaale=1.0">
<title>Travelling Contact Us Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}
.contact
{
   position:relative;
   min-height:100vh;
   padding:100px 100px;
   display:flex;
   justify-content:center;
   align-items:center;
   flex-direction:column;
   background:url("images/famous.jpg");
   background-size:cover;
}
.contact .content
{
   max-width:800px;
   text-align:center;
}
.contact .content h2
{
   font-size:36px;
   font-weight:500;
   color:green;
}
.contact .content p
{
   font-weight:300;
   color:black;
}
.container
{
   width:100%;
   display:flex;
   justify-content:center;
   align-items:center;
   margin-top:30px;
}
.container .contactInfo
{
   width:50%;
   display:flex;
   flex-direction:column;
}
.container .contactInfo .box
{
    padding:relative;
    padding:20px 0;
    display:flex;
}
.container .contactInfo .box .icon
{
    min-width:60px;
    height:60px;
    background:red;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:50%;
    font-size:22px;
}
.container .contactInfo .box .text
{
    display:flex;
    margin-left:20px;
    font-size:16px;
    color:#fff;
    flex-direction:column;
    font-weight:300;
}
.container .contactInfo .box .text h3
{
   font-weight:500;
   color:#00bcd4;
}
.container .contactInfo .box .text p
{
   color:black;
}
.contactForm
{
    width:40%;
    padding:40px;
    background:#fff;
}
.contactForm h2
{
    font-size:30px;
    color:#333;
    font-weight:500;
}
.contactForm .inputBox
{
    position:relative;
    width:100%;
    margin-top:10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea
{
   width:100%;
   padding:5px 0;
   font-size:16px;
   margin:10px 0;
   border:none;
   border-bottom:2px solid #333;
   outline:none;
   resize:none;
}
.contactForm .inputBox span
{
    position:absolute;
    left:0;
    padding:5px 0;
    font-size:16px;
    margin:10px 0;
    pointer-events:none;
    transition:0.5s;
    color:#666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span
{
    color:#e91e63;
    font-size:12px;
    transform:translateY(-20px);
}
.contactForm .inputBox input[type="submit"]
{
   width:100px;
   background:#00bcd4;
   color:#fff;
   border:none;
   cursor:pointer;
   padding:10px;
   font-size:18px;
}
@media (max-width:991px)
{
   .contact
   {
      padding:50px;
   }
   .container
   {
      flex-direction:column;
   }
   .container .contactInfo
   {
       margin-bottom:40px;
   }
   .container .contactInfo,
   .contactForm
   {
      width:100%;
   }

</style>
</head>
<body> 
    <section class="contact">
        <div class="content">
             <h2>Travelling Contact Us Page</h2>
             <p>Traveller is the india's one of the famous site.if you are any doubt related to this site or booking the traveeling ticket or any other issue then i provide spme contact for your information, and i also create one portal for your text messages and if your not satisfied with call then please below send message form and send to traveller company.</p>
        </div>
        <div class="container">
             <div class="contactInfo">
                   <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                             <h3>Address</h3>
                             <p>4678, Pipeline Road,<br>Ahmednagar,Maharashtra,<br>414103</p>
                        </div>
                   </div>
                   <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                             <h3>Phone</h3>
                             <p>507-475-6094</p>
                        </div>
                   </div>
                   <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                             <h3>Email</h3>
                             <p>traveller748956ioe@gmail.com</p>
                        </div>
                   </div>
             </div>
             <div class="contactForm">
                   <form action="contact_us_page/contact_us_popup">
                      <h2>Send Message</h2>
                      <div class="inputBox">
                           <input type="text" name="" required="required">
                           <span>Full Name</span>
                      </div>
                      <div class="inputBox">
                           <input type="text" name="" required="required">
                           <span>Email</span>
                      </div>
                      <div class="inputBox">
                           <textarea required="required"></textarea>
                           <span>Type your Message...</span>
                      </div>
                      <div class="inputBox">
                         <input type="submit" name="" value="Send">
                      </div>
                  </form>
           </div>
       </div>
  <section>
</body>
</html>
@endsection                     
 
    






   