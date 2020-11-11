# Insurance Calculator

Insurance calculator is a platform built in php for dealing with the calculations of different providers.

## Installation
Install [PHP](https://www.php.net/downloads.php)

Install the dependency manager for PHP [composer](https://getcomposer.org/).

## Usage

Click on this link [Insurance-Calculator](http://localhost/insurance-calculator/App/Insurance.php).

## Questions
1. Would it be safe to go into production?
    
    
    No, it won’t be safe to go into production with that code. 
    If we want to get the best data out of production testing, then the design of the code should follow proper testing standards. Also, exception handling should     also be used and proper error messages should also be handled like 500 in case of Internal Server Error etc.
  
2. Does it follow best practices?

    ```No, the code does not follow best practices. Essentially, code that is considered good have the following qualities which the current code does not follow```
        
        - Follows a consistent style.
        - Have exception handling in place like try and catch block.
        - Is reliable, that is it will run without failure without a specific operation.
        - Is testable, that is it relies on how well you can control and observe among other factors.
        
3. Would it be safe to go into production?

    ```In order to verify that the code is always working as intended can be performed in the following ways:```
        
        - Write test cases
        - Follow strict naming conventions. This should be done to easily identify what each function or php test is for. For example testing for a functions behaviour should be named as <functionName>_test.php and testing for an error behaviour should be named as <functionName>_error.php
        - Make use of asserts.

## Tools and Technologies
    - PHP 7.4.3.

    - Composer 2.0.6
