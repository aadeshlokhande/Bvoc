from phoneinfopy import register_phone_number

number = "+917058232826"
response = register_phone_number(number)
print(response)


{'status': True, 'message': 'Sent an OTP for +917058232826', 'requestId': '56b873f3-9fa9-41e9-9f2e-9552236cf36b'}
