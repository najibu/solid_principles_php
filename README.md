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
Mathematical definition: Let q(x) be a property provable about objects x of type T.
Then q(y) should be provable for objects y of type S where S is a subtype of T.
Everytime you prepare a subclass: Derived classes must be substitutable for their base classes.
Always make sure the output of your implementation match what is specified in the contract.
Conclusion:
1. Signature must match
2. Preconditions can't be greater
3. Post conditions at least equal to
4. Exception types must match
<br />

4. Interface Segregation <br />
The Interface Segregation Principle states that a client should never be forced to implement an interface that it doesn’t use. As you'll find, this all comes down to knowledge.
The knowledge that one object has over another object.
<br />

5. Dependency Inversion <br />
There's a common misunderstanding that "dependency inversion" is simply another way to say "dependency injection." However, the two are not the same.
High level code depends upon abstractions, not on concretions.
Dependency inversion does not equal dependency injection.
High level modules should not depend on low level modules instead they should depend upon abstractions or contract or an interface.
Low level module too should depend upon abstraction.
All of this is about decoupling code.
High level is code that isn't concerned with specific details.
Low level code is more concerned with details and specifics.
IOC(Inversion of control): who exactly is in control
<br />


### Thank you for checking out SOLID Principles in PHP!
