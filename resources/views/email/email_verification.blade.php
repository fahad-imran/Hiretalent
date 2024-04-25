<!DOCTYPE html>
<html>
<head>
<title>Welcome Email</title>
</head>

 

<body>
<h2>Welcome to Hiretalent</h2>
<div style="background: #f1f3f4; border-radius: 10px; padding: 10px 15px;">
<h3>
        Please click on the button below to verify your email address
</h3>
@php 
$url = base64_encode($token);
@endphp
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <a  href="{{url('account/verify',$token)}}"><button style="background: #97afe4; padding: 10px 20px; border-radius: 5px; font-size: 15px; color:#000;">Verify your Email</button></a>
<h4>
        If you have not requested this, Just delete this email.
</h4>
</div>
</body>

 

</html>