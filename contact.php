<?php
$contacts = [];
    // print_r($contacts);
    // var_dump($contacts);
    // var_export($contacts);
    // একবার & দিয়ে প্রিন্ট করতে হবে আর একবার & না দিয়ে রান করতে হবে
function addcontact(array &$contacts, string $name, string $email, string $phone)
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}
    // function to display all contacts 
function displayContacts(array &$contacts): void
{
    if (empty($contacts)) {
        echo "No contracts Avilable .\n ";

    } else {
        foreach ($contacts as $contact) {
            echo "
            Name : {$contact['name']},
            Email : {$contact['email']},
            Phone : {$contact['phone']} \n,";
        }

    }

}
  // terminal based intreface || code this first

while (true) {
    echo "\nContact Management Menu:\n";
    echo "1. Add Contact\n 2. View Contacts\n 3. Exit\n";
    $choice = (int) readline("Choose an option: ");

    if ($choice === 1) {
        $name = readline("Enter name: ");
        $email = readline("Enter email: ");
        $phone = readline("Enter phone number: ");
        addContact($contacts, $name, $email, $phone);
        echo "$name :-name added to contacts.\n" ;
            echo "$email :-email added to contacts.\n" ;
            echo "$phone :-phone added to contacts.\n" ;

    } elseif ($choice === 2) {
        displayContacts($contacts);

    } elseif ($choice === 3) {
        echo "Exiting...\n";
        break;
    } else {
        echo "Invalid choice. Please try again.\n";
    }

}