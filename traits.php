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
    public function log(string $message, string $file)
    {
       // addfile and message validation
        if (empty($file) || empty($message)) {
            return "File name and message cannot be empty.";
        }
        // Simulate logging to a file
        // add message to file
        file_put_contents($file, $message . PHP_EOL, FILE_APPEND);
        return "Logged message: '{$message}' to file: '{$file}'";
    }
}

class Invoice{
    use EmailSender, Logger;

    public function create(){
        $this->log("Creating invoice", "invoice.log");
        return "Invoice created.";
    }
}

$invoice = new Invoice();
echo $invoice->sendEmail("customer@example.com", "Invoice #123", "Your invoice details...");