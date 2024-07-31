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
        $mail->setFrom($mail_data['fromEmail'], $mail_data['fromName']);
        $mail->isHTML(true);
        $mail->Subject = $mail_data['subject'];
        $mail->Body = $mail_data['message'];

        // dd(env('EMAIL_HOST'), env('EMAIL_USERNAME'), env('EMAIL_PASSWORD'));


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
