# SOLID Principles in PHP

SOLID represents a series of guidelines that developers can use to, if done well, simplify and clarify their code. While certainly not laws, understanding these concepts will make you a better developer.

## SOLID Principles

1. Single Responsibility <br />
The most popular of the SOLID design principles, the single responsibility principle dictates that a class should have only one reason to change.
Another way to put it is that a class should exactly have one job.
A class should a single responsibility, if it has too many responsibilities its doing too much at which point extract some of these responsibilities into there own classes and there own responsibilities.
Another way to think about it is that a class has too many consumers.
<br />

2. Open-Closed <br />
Entities should be open for extension, but closed for modification.
Open for extension: means it should be simple to change the behaviour of a particular entity e.g. a class.
Closed for modification: means change behaviour without modifying source code.
Avoid code rot.
When you have a module that you want to extend without modifying: separate extensible behaviour behind an interface, and flip the dependencies.
Polymorphism: the ability to have different behaviour while still sharing a common interface.
This is one of those principles that developers often skip over. Don't! These techniques are paramount to mature design.
<br />

3. Liskov Substitution <br />
Coined by Barbara Liskov, this principle states that any implementation of an abstraction (interface) should be substitutable in any place that the abstraction is accepted.
<br />

4. Interface Segregation <br />
The Interface Segregation Principle states that a client should never be forced to implement an interface that it doesn’t use. As you'll find, this all comes down to knowledge.
<br />

5. Dependency Inversion <br />
There's a common misunderstanding that "dependency inversion" is simply another way to say "dependency injection." However, the two are not the same.
<br />


### Thank you for checking out SOLID Principles in PHP!
