
@extends('Emails.admin_email_layout')

@section('content')

<table   border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="600" style="width:600px;max-width:600px;">
  <tr>
    <td align="center"  bgcolor="#e8b406" class="container-padding">
      <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="520" style="width:520px;max-width:520px;">
        <tr >
          <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
        </tr>
        <tr  >
          <td class="center-text"  align="center" style="font-family:'Playfair Display',Arial,Helvetica,sans-serif;font-size:30px;line-height:32px;font-weight:700;font-style:normal;color:#000000;text-decoration:none;letter-spacing:0px;">
            
              <div>
                Hello {{ $user->name }},<br>
              </div>
            
          </td>
        </tr>
        <tr >
          <td height="25" style="font-size:25px;line-height:25px;" >&nbsp;</td>
        </tr>
        <tr  >
          <td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#000000;text-decoration:none;letter-spacing:0px;">
            
              <div  >
                Congratulations!. You have been accepted as an admin. Please login using this email address: {{ $user->email }}
            </div>
            
          </td>
        </tr>
        <tr >
          <td height="15" style="font-size:15px;line-height:15px;" >&nbsp;</td>
        </tr>
        <tr  >
          <td valign="middle" align="center" class="center-text">
            <span    style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:16px;line-height:30px;font-weight:300;font-style:normal;color:#000000;text-decoration:none;letter-spacing:0px;display:inline-block;vertical-align:middle;">
                
                  <div  >
                    Rost Web
                  </div>
                
            </span>
          </td>
        </tr>
        <tr >
          <td height="20" style="font-size:20px;line-height:20px;" >&nbsp;</td>
        </tr>
        <tr  >
          <td align="center">
            <table border="0" cellspacing="0" cellpadding="0" role="presentation" align="center" class="center-float">
              <tr>
                <td align="center" bgcolor="#FFFFFF" style="border-radius: 0px;">
                      <a href="http://127.0.0.1:8000/admin123/dashboard" target="_blank"    style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:14px;font-weight:400;font-style:normal;color:#000000;text-decoration:none;letter-spacing:0px;padding: 20px 43px 20px 43px;display: inline-block;"><span>Login page</span></a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr >
          <td height="50" style="font-size:50px;line-height:50px;" >&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
  </table>

      </td>
    </tr>
    <tr>
      <td height="50" class="m-height30" style="font-size:50px;line-height:50px;" >&nbsp;</td>
    </tr>
  </table>

      </td>
    </tr>
</table>
@endsection

