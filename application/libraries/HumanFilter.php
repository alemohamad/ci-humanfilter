<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * HumanFilter class for ci-humanfilter library.
 *
 * @author Ale Mohamad <hello@alemohamad.com>
 * @version 1.0
 * @link http://github.com/alemohamad/ci-humanfilter
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */

class HumanFilter
{

    private $questions = array();
    public $question;
    public $answer;

    public function __construct()
    {
        $this->questions[] = array('q' => 'What is 5 + 3?',             'a' => '8');
        $this->questions[] = array('q' => 'What is 3 + 2?',             'a' => '5');
        $this->questions[] = array('q' => 'What is 5 + 5?',             'a' => '10');
        $this->questions[] = array('q' => 'What is 2 + 7?',             'a' => '9');
        $this->questions[] = array('q' => 'What color is a lemon?',     'a' => 'yellow');
        $this->questions[] = array('q' => 'What is 5 + 1?',             'a' => '6');
        $this->questions[] = array('q' => 'What is 7 + 7?',             'a' => '14');
        $this->questions[] = array('q' => 'What is 8 + 8?',             'a' => '16');
        $this->questions[] = array('q' => 'What shape has no corners?', 'a' => 'circle');
        $this->questions[] = array('q' => 'What is 6 + 6?',             'a' => '12');
        $this->questions[] = array('q' => 'What is 5 x 3?',             'a' => '15');
        $this->questions[] = array('q' => 'What is 16 + 2?',            'a' => '18');
        $this->questions[] = array('q' => 'What is 20 + 25?',           'a' => '45');
        $this->questions[] = array('q' => 'What is 16 + 4?',            'a' => '20');
        $this->questions[] = array('q' => 'What is 9 + 1?',             'a' => '10');
        $this->questions[] = array('q' => 'What is 7 x 3?',             'a' => '21');
        $this->questions[] = array('q' => 'What is 7 + 7 + 1?',         'a' => '15');
        $this->questions[] = array('q' => 'What is 13 + 3?',            'a' => '16');
        $this->questions[] = array('q' => 'What color is a banana?',    'a' => 'yellow');
        $this->questions[] = array('q' => 'What is 15 - 5?',            'a' => '10');
        $this->questions[] = array('q' => 'Are you a bot?',             'a' => 'no');
        $this->questions[] = array('q' => 'Are you a human?',           'a' => 'yes');
        $this->questions[] = array('q' => 'Are you a cylon?',           'a' => 'no');
        $this->questions[] = array('q' => 'Are you from mars?',         'a' => 'no');
        $this->questions[] = array('q' => 'Is Earth a cube?',           'a' => 'no');
        $this->questions[] = array('q' => 'Can pigeons fly?',           'a' => 'yes');
    }

    /**
     * Get a new question and answer from the questions list
     *
     * @return void
     */
    public function get_new_question()
    {
        $bot_rand = array_rand($this->questions);

        $this->question = $this->questions[$bot_rand]['q'];
        $this->answer   = $this->questions[$bot_rand]['a'];
    }

    /**
     * Return the question
     *
     * @return string
     */
    public function get_question()
    {
        return $this->question;
    }

    /**
     * Return the answer
     *
     * @return string
     */
    public function get_answer()
    {
        return $this->answer;
    }

}
