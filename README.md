# Guest-Comment-Display
Reads entires collected in a Google Doc and creates a web-based display for our digital signage system.

Notes:
- We are using the iPad app Guestd (https://www.guestd.com) to collect the comments into a Google spreadsheet.  Guestd automatically creates the spreadsheet once you sign-in to your account.  We lock app in Guided Access Mode.
- You'll then need to gather your JSON feed for the Google spreadsheet and plug it into the file_get_contents request.
- Then just run the PHP file as normal.
