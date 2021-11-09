# Static Methods

## What are static methods and what is the difference?

    - Static methods of a class are essentially 'utility' or 'helper' methods.
    - They are called using the class itself, instead of being called by an instance of a class.
    - Class:

        class Product {
            static calcDiscount()
        }

    - Correct Example:

        Product.calDiscount();

    - InCorrect Example:

        let prod1 = new Product();
        prod1.calcDiscount();
    
    - Common use case for static methods is when you want to perform an operation without the need to create and instance of a class.
    