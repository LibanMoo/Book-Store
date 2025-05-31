# FilamentPHP 5-Day Developer Challenge

## 📌 Overview Day 03
PHP and Laravel challenge
you can acces the guide in here: 
https://www.notion.so/mohaaosman/FilamentPHP-5-Day-Developer-Challenge-1ffa8c627077807eb60fcbf9c1f43702

## 🎯 Purpose
This is a challenge i am taking 

## 📚 Resources
[Book Resource](./app/filament/resources/BookStoreResource.php)

## How i validated and Stored Uploaded files?
i validated the uploaded file using filament resources.
i declared the rules in the form schema
the rules are :
<ul>
<li>required can'be null </li>
<li>it must be image </li>
<li>image preveiw is 250 </li>
<li>Max size of the image must not be more then 900kb </li>
</ul>

How i stored
<ul>
 <li>made the disk public to access the files publicly </li>
 <li>used the cover_book directory to store the images </li>
 <li>Only the relative path is stored in the database </li>
</ul>

## How are uploaded files retrieved/displayed?

In Filament, uploaded files are retrieved and displayed by accessing the path stored in the database and then generating a URL using Laravel's Storage system.

Here’s how i displayed the image:

1. Retrieved the file path from the database 
2. Displaying an uploaded image:
   ```bash
  ImageColumn::make('cover_book')
