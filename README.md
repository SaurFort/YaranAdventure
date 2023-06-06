# YaranAdventure
YaranAdventure is a website created specialy for a school project.

## Summary
### FAQ
- [Why?](#why?)
- [Cah I use this project for my school](#use-this-project-for-school)

### Code documentation
- [Image](#image)
- [Subtitle](#subtitle)
- [Arrows](#arrows)



## FAQ
### Why?
I have created this website for a school project for Plastical-Art (a french school subject), the objective with this project is to make a website with the ability to let you read a story.
But I have made some upgrade on this, exemple with the audio when you read a page.

### Use this project for school
You can use this project for school only if you don't use my image, but you can easily used this project for an other school project.
You have a documentation were I have explain my code.



## Code documentation
### Image
The method I have used is not the best, I think is better to use a db but when I have maked this website, I haven't take the time to do that.
That is the reason why I have used some conditions.

In first, in the php script where we show image there is this line `$page = "{$_GET['page']}";`, this line take the page number in url with that `https://example.com/?page=1` to show the corespondant image.
I have made few conditions to try to don't accept other entries excepted the number of my page (0 to 14).

In second, you have some conditions to choose the right image with the variable `$page` with this script 
`if($page == 1) {
    $img = "assets/images/bd/1.jpg";
} else if($page == 2) {
    $img = "assets/images/bd/2.jpg";
} else if($page == 3) {
    $img = "assets/images/bd/3.jpg";
} else if($page == 4) {
    $img = "assets/images/bd/4.jpg";
} else if($page == 5) {
    $img = "assets/images/bd/5.jpg";
} else if($page == 6) {
    $img = "assets/images/bd/6.jpg";
} else if($page == 7) {
    $img = "assets/images/bd/7.jpg";
} else if($page == 8) {
    $img = "assets/images/bd/8.jpg";
} else if($page == 9) {
    $img = "assets/images/bd/9.jpg";
} else if($page == 10) {
    $img = "assets/images/bd/10.jpg";
} else if($page == 11) {
    $img = "assets/images/bd/11.jpg";
} else if($page == 12) {
    $img = "assets/images/bd/12.jpg";
} else if($page == 13) {
    $img = "assets/images/bd/13.jpg";
} else if(!$page == 14) {
    $page = 0;
} else if($page > 14 || $page < 0) {
    header('Location: ?page=0');
    }`

### Subtitle


### Arrows
