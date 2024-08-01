<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use App\Rules\ReCaptchaV3;
use Illuminate\Http\Request;
use HTMLPurifier;
use HTMLPurifier_Config;

class ContactUsController extends Controller
{
    /**
     * Shows the contact page with the contact form
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Processes the contact form post
     */
     public function send(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email:rfc'],
            'subject' => ['required', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:500'],
            'g-recaptcha-response' => ['required', new ReCaptchaV3('submitContact')]
        ]);

       // Konfigurasi HTMLPurifier
        $config = HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', ''); // Tidak mengizinkan tag HTML
        $config->set('Cache.DefinitionImpl', null); // Menonaktifkan caching untuk tujuan pengujian
        $purifier = new HTMLPurifier($config);


        // Clean the inputs
        $cleanedName = $purifier->purify($request->input('name'));
        $cleanedEmail = $purifier->purify($request->input('email'));
        $cleanedSubject = $purifier->purify($request->input('subject'));
        $cleanedMessage = $purifier->purify($request->input('message'));

        // Check cleaned data (optional debugging)
        //  dd($cleanedName, $cleanedEmail, $cleanedSubject, $cleanedMessage);

        $mail_data = [
            'recipient' => 'adesopianganteng1@gmail.com',
            'fromEmail' => $cleanedEmail,
            'fromName' => $cleanedName,
            'subject' => $cleanedSubject,
            'message' => $cleanedMessage
        ];

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

       $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 2; // Set to 0 for no debug output
        $mail->isSMTP();
        $mail->Host = env('EMAIL_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = env('EMAIL_USERNAME');
        $mail->Password = env('EMAIL_PASSWORD');
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; // Use 587 for TLS encryption
        $mail->addAddress('adesopianganteng1@gmail.com');

        // Menggabungkan fromName dengan fromEmail
        $fromNameWithEmail = "{$mail_data['fromName']} <{$mail_data['fromEmail']}>";
        $mail->setFrom($mail_data['fromEmail'], $fromNameWithEmail);

        $mail->isHTML(true);
        $mail->Subject = $mail_data['subject'];

       $mail->Body = "
        <div style=\"max-width: 640px; margin: 0 auto; padding: 24px; background-color: #ffffff; color: #1a202c; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;\">

            <main style=\"margin-top: 32px;\">
                <h2 style=\"color: #4a5568;\">From {$mail_data['fromName']},</h2>

                <p style=\"margin-top: 8px; line-height: 1.75; color: #718096;\">
                    You have a new message from <span style=\"font-weight: 600;\">{$mail_data['fromName']} ({$mail_data['fromEmail']})</span>.
                </p>
                
                <div style=\"padding: 16px; background-color: #f7fafc; border-radius: 8px; border: 1px solid #e2e8f0; margin-top: 16px;\">
                    <p style=\"font-size: 16px; line-height: 1.75; color: #1a202c;\">
                        <strong>Subject:</strong> {$mail_data['subject']}
                    </p>
                    <p style=\"font-size: 16px; line-height: 1.75; color: #1a202c;\">
                        <strong>Message:</strong><br>{$mail_data['message']}
                    </p>
                </div>
            </main>

            <footer style=\"margin-top: 32px; text-align: center; color: #718096;\">
                <p style=\"margin: 0; font-size: 14px; color: #a0aec0;\">
                    This email was sent by <a href=\"#\" style=\"color: #3182ce; text-decoration: underline;\" target=\"_blank\">{$mail_data['fromEmail']}</a>. 
                </p>
            </footer>
        </div>
    ";


        // dd(env('EMAIL_HOST'), env('EMAIL_USERNAME'), env('EMAIL_PASSWORD'));
        // dd($mail_data);


    if ($mail->send()) {
                    return redirect()->back()->with('message', 'Thank you for contacting us. Your message has been sent.');
                } else {
                    return redirect()->back()->withInput()->with('message', 'Email not sent');
                }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


        // \Mail::send('components.email-template', $mail_data, function($message) use ($mail_data) {
        //     $message->to($mail_data['recipient'])
        //             ->from($mail_data['fromEmail'], $mail_data['fromName'])
        //             ->subject($mail_data['subject']);
        // });

        // return redirect()->back()->with('message', 'Thank you for contacting us. Your message has been sent.');
    }
}
