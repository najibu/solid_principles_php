<?php
/* Liskow Substitution Principle */

function (SomeInterface $obj)
{

}

/* Start */
// Derived classes must be substitutable for their base classes.
class A
{
    public function fire()
    {

    }
}

// According to the principle we should be about to use B anywhere that A is accepted.

class B extends A
{
    public function fire()
    {

    }
}

function doSomething(A $obj)
{
    // do something with it
}

/* End */

/* Start */
class VideoPlayer
{
    public function play($file)
    {
        // play the video
    }
}

class AviVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
            throw new Exception; // violates the LSP
        }
    }
}
/* End */

/* Start */
interface LessonRepository
{
    /**
     * Fetch all records
     * @return array
     */
    public function getAll();
}

class FileLessonRepository implements LessonRepository
{
    public function getAll()
    {
        // return through file system
        return [];
    }
}

class DbLessonRepository implements LessonRepository
{
    public function getAll()
    {
        return Lesson::all()->toArray(); // Lesson::all() violates the LSP it must be an array
    }
}

/**
 * Always make sure the output of your implementation match what is
 * specified in the contract
 * @param  LessonRepository $lesson
 * @return [array]
 */
function foo(LessonRepository $lesson)
{
    $lesson = $lesson->getAll();
}
/* End */
