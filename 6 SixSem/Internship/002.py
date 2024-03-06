from phoneinfopy import validate_OTP

number = "+917058232826"
OTP = "132564"
requestId = "2708d510-6ced-42a9-9675-fa7bad1db709"
response = validate_OTP(number, OTP, requestId)
print(response)