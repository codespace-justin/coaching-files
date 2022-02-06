# Model 1 Notes:

### V Model

    * v-model is a way to do 2 way binding
    * commonly used on input/form-type elements
    * essentially allows you to use model to update the view/dom (like normal), but you can also use the view/dom to update the model/vue props
    * eg:
        <input type="text"> v-model="name"