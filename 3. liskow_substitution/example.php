<?php 
// Liskow Substituion Principle

function(SomeInterface $obj) {

}

// ---Start
// Derived classes must be substitutable for their base classes.

class A {
  public function fire(){};
}

// According to the principle we should be about to use B anywhere that A is accepted.

class B extends A {
  public function fire(){};
}

function doSomething(A $obj)
{
  // do something with it
}
// ---End


// ---Start
class VideoPlayer {
  public function play($file)
  {
    // play the video
  }
}

class AviVideoPlayer extends VideoPlayer {
  public function play($file)
  {
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
      throw new Exception; // violates the LSP
    }
  }
}

// ---End


// ---Start

interface LessonRepositoryInterface {
  /**
   * Fetch all records
   * @return array   
   * 
   */
  public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface {
  public function getAll()
  {
    // return through filesystem 
    return [];
  }
}

class DbLessonRepository implements LessonRepositoryInterface {
  public function getAll()
  {
    
    return Lesson::all()->toArray(); // violates the LSP
  }
}

function foo(LessonRepositoryInterface $lesson)
{
  $lessons = $lesson->getAll();
}

// ---End
