<?php 
trait EmailSender
{
    public function sendEmail(string $to, string $subject, string $message): string
    {
        // Simulate sending an email
        return "Email sent to {$to} with subject '{$subject}' and message '{$message}'";
    }
}
trait Logger
{
    public function log(string $message): string
    {
        // Simulate logging a message
        return "Log: {$message}";
    }
}

class Invoice{
    use EmailSender, Logger;
}

$invoice = new Invoice();
echo $invoice->sendEmail("customer@example.com", "Invoice #123", "Your invoice details...");
