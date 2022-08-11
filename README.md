<h1>LaraMail Api</h1>

<h3>Requirements</h3>

<ul>
<li>Laravel 9.23</li>
<li>PHP 8.1</li>


</ul>

<h3>How to use it!</h3>

<p>Just send a api request to your hosted website ex: www.yourhostedwebsite.com/api/apimail with these form names:

<ul>
<li>name</li>
<li>user_email</li>
<li>email</li>
<li>content</li>
<li>title</li>

</ul>



It's also important to setup the .env file in order to this api to work.

<ul>
<li>MAIL_USERNAME</li>
<li>MAIL_PASSWORD</li>
<li>MAIL_FROM_ADDRESS</li>


</ul>

Those parameters are required to work properly.





The field email is going to send an email to that email in this field, while the other attributes are going to show in the body of the email.
</p>
