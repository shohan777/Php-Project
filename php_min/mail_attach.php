<?php
$to = 'shohan.st7@hotmail.com';
$from = 'shohan.27innocent@gmail.com';
$subject = 'See Attachments';
$message = 'Please review the following attachments.';

// Define a list of FILES to send along with the e-mail. Key = File to be sent. Value = Name of file as seen in the e-mail.
$attachments = array(
	'/tmp/WEDFRTS' => 'first-attachment.png',
	'/tmp/some-other-file' => 'second-attachment.png'
);

// Define any additional headers you may want to include
$headers = array(
	'Reply-to' => 'source@somewhere.com',
	'Some-Other-Header-Name' => 'Header Value'
);

$status = mailAttachments($to, $from, $subject, $message, $attachments, $headers);
if($status === True) {
	print 'Successfully mailed!';
} else {
	print 'Unable to send e-mail.';
}