import imaplib
import time
 
now = time.strftime("%c")



fo = open("new_mail.txt", "rw+")
mail = imaplib.IMAP4_SSL('imap.gmail.com')
mail.login('mail3456543@gmail.com', 'haoyue2000')
mail.list()
# Out: list of "folders" aka labels in gmail.
mail.select("inbox") # connect to inbox.
result, data = mail.search(None, "ALL")

ids = data[0] # data is a list.
id_list = ids.split() # ids is a space separated string
latest_email_id = id_list[-1] # get the latest

# fetch the email body (RFC822) for the given ID
result, data = mail.fetch(latest_email_id, "(RFC822)") 

raw_email = data[0][1] # here's the body, which is raw text of the whole email
# including headers and alternate payloads

import email
email_message = email.message_from_string(raw_email) 
print email.utils.parseaddr(email_message['From'])
# fo.write(''.join(email.utils.parseaddr(email_message['From'])) + "<br> \n")
print (email_message['Subject'])
# fo.write("%s <br> \n"  % now )
fo.write(''.join(email_message['Subject']) + "<br> \n")

b = email.message_from_string(raw_email)
if b.is_multipart():
    for payload in b.get_payload():
        # if payload.is_multipart():
	 emailstring = ''.join(payload.get_payload())
         s2 = emailstring.split("<html")[0]
	 sa = ''.join(s2)
	 sb = sa.split("<div")[0]
	 sz = ''.join(sb)
	 sx = sz.split("<")[0]
	 print sx
	 fo.write(sb + "<br> \n")
else:
	 emailstring2 = ''.join(b.get_payload())
	 s3 = emailstring2.split("<div")[0]
	 sy = ''.join(s3)
	 sw = sy.split("<")[0]
    	 print s3
	 fo.write(s3 + "<br> \n")
 

fo.close()
#s2 = s.split('<head>')[1]

