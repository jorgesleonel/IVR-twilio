# Basic IVR (voice portal) using Twilio API

This is a simple voice portal implemented in PHP leveraging the powerful Twilio voice API

Code is straightforward:

. In first couple of lines, variable $user_pushed is created & associated with phone keyboard input

. Switch control command will then execute a different action depending on number pressed

. Most of this functionality is enabled through a combination of say (sound is played to end user) and gather (input) Twilio TwiML directives

. The Redirect verb transfers control of a call to the TwiML at a different URL
