<?php 
interface SendInterface{
    public function send(): string; 
}
interface SaveInterface{
    public function save(): string; 
}

class Document implements SendInterface, SaveInterface
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function send(): string
    {
        return "Sending document: {$this->content}";
    }

    public function save(): string
    {
        return "Saving document: {$this->content}";
    }
}

class SaveProcess
{
    private SaveInterface $saveInterface;

    public function __construct(SaveInterface $saveInterface)
    {
        $this->saveInterface = $saveInterface;
    }

    public function execute(): string
    {
        return $this->saveInterface->save();
    }
}

$document = new Document("My Document Content");
$saveProcess = new SaveProcess($document);
echo $saveProcess->execute(); // Output: Saving document: My Document Content