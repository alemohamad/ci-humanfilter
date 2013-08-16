# CodeIgniter Library: Human Filter

**ci-humanfilter**

## About this library

This CodeIgniter's Library is used to get a new paired question and answer from a list (you can modify this questions in the library) so the system can verify that the user that is sending any form is a human and not a bot.  
Its usage is recommended for CodeIgniter 2 or greater.  

## Usage

```php
$this->load->library('HumanFilter');

$this->humanfilter->get_new_question();

$question = $this->humanfilter->get_question();
$_SESSION['answer'] = $this->humanfilter->get_answer();
```

![Ale Mohamad](http://codeigniter.alemohamad.com/images/logo2012am.png)