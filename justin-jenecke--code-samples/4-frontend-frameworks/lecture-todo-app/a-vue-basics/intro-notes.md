# Frontend Frameworks : Vue

<hr>

### How Vue works

Vue allows you to build frontend applications similar to how you did in the IWA course.

The main difference regarding implementation in Vue vs JavaScript is that in Vue the use of the DOM and the DOM api is abstracted away from you, meaning you do not have to use any DOM methods, or reference any specific elements directly.

The way you interact wuith the DOM is via a two way connection mechanism known as "Propery Binding". In Vue you essentially need to manage a two way connection between the phyiscal presentation of your app (View), and the data inside of a Vue app or instance (Model)

With Vue your still using a browser and the DOM, but instead referencing the whole document every single time you essentially connect a single containing element to a particular Vue instance, thus setting up the above mentioned tunnel between the data (properties and functions) in the Vue app and the linked container element (View).

<br>
<hr>
<br>

### Create Vue App:

1. Create blank html file for our app

2. Go to Vue v3 Documentation and click installation

3. Copy the link to the CDN and paste it in the head of youe HTML document

4. <script src="https://unpkg.com/vue@next"></script>

5. Create any containing element (semantic element or div) and give an id that will be representitive of our app

6. Create a new js file with the same name as the id (for convention. any representitive name will suffice)

7. Finally create a Vue instance by creating a new Vue object literal, name it similar to the filename and assign it = new Vue()

8. Open curly braces inside the objects arguements, give it 1 property with a key of 'el' and assign it the value of your        container elements id.

9. Dont forget to use # and quotes as you must use css selector

After the following steps you will have successfully create an app component (View), and a new Vue instance (Model).
