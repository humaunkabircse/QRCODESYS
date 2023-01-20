<h2 style="text-align: center">Contact Form Received Email </h2> 
 <hr>
<table role="presentation" style="width: 600px; border-collapse: collapse;">
  <tbody>
    <tr>
      <th style="padding: 16px 12px;">First Name: </th>
      <td style="padding: 16px 12px;">{{$details['fname']}}</td>
    </tr>
    <tr style="background: #edf2f4;">
      <th style="padding: 16px 12px;">Last Name: </th>
      <td style="padding: 16px 12px;">{{$details['lname']}}</td>
    </tr>
    <tr>
      <th style="padding: 16px 12px;">Phone: </th>
      <td style="padding: 16px 12px;">{{$details['phone']}}</td>
    </tr>
    <tr style="background: #edf2f4;">
      <th style="padding: 16px 12px;">Email: </th>
      <td style="padding: 16px 12px;">{{$details['email']}}</td>
    </tr>
    <tr>
      <th style="padding: 16px 12px;">Subject: </th>
      <td style="padding: 16px 12px;">{{$details['subject']}}</td>
    </tr>
    <tr style="background: #edf2f4;">
      <th style="padding: 16px 12px;">Message: </th>
      <td style="padding: 16px 12px;">{{$details['message']}}</td>
    </tr>
  </tbody>
</table>

