<?php
/*
Template Name: Category
*/

get_header();


// get the current taxonomy term
$term = get_queried_object();


// vars
$background = get_field('category_background', $term);
$background_position = get_field('category_background_position', $term);
$logo_svg = get_field('category_logo_svg', $term);
?>

<!-- Section Template -->

<body class="tt-sect">

<!-- Section Masthead -->
<div class="tt-masthead tt-masthead--overlay" style="background-image: url('<?php echo $background ?>'); background-position: <?php echo $background_position ?>">
    <div class="tt-masthead__logo-wrapper">
        <div class="tt-masthead__logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/<?php echo $logo_svg ?>.svg');"></div>
    </div>
</div>

<section class="tt-sect__cont">

    <!-- Section Cards -->
    <ul class="tt-sect__cards">

        <!-- Section Card -->
        <li class="tt-sect__cards__item">
            <a href="#" class="tt-sect__card">

                <!-- Section Card Image -->
                <div class="tt-sect__card__img" style="background-image: url('https://images6.alphacoders.com/726/thumb-1920-726263.jpg');"></div>

                <div class="tt-sect__card__cont">

                    <!-- Section Card Title -->
                    <h3 class="tt-sect__card__title">
                        What was that? Oh, it's nothing. Don't worry about it.
                    </h3>

                    <!-- Section Card Description -->
                    <p class="tt-sect__card__descr">
                        Help me, Obi-Wan Kenobi. You're my only hope. What's this? What is what?!? He asked you a question... What is that? Help
                        me, Obi-Wan Kenobi. You're my only hope. Help me, Obi-Wan Kenobi. You're my only hope. Oh, he
                        says it's nothing, sir. Merely a malfunction. Old data. Pay it no mind. Who is she? She's beautiful.
                        I'm afraid I'm not quite sure, sir. Help me, Obi-Wan Kenobi... I think she was a passenger on
                        our last voyage. A person of some importance, sir -- I believe. Our captain was attached to...
                        Is there more to this recording? Behave yourself, Artoo. You're going to get us in trouble.
                    </p>

                </div>

                <!-- Section Card Author -->
                <div class="tt-sect__card__auth">
                    <span>By</span>
                    <strong>Darth Vader</strong>
                </div>

            </a>
        </li>

        <!-- Section Card -->
        <li class="tt-sect__cards__item">
            <a href="#" class="tt-sect__card">

                <!-- Section Card Image -->
                <div class="tt-sect__card__img" style="background-image: url('https://pmcvariety.files.wordpress.com/2018/05/star-wars-bts.jpg?w=1000&h=563&crop=1');"></div>

                <div class="tt-sect__card__cont">

                    <!-- Section Card Title -->
                    <h3 class="tt-sect__card__title">
                        We're Doomed
                    </h3>

                    <!-- Section Card Description -->
                    <p class="tt-sect__card__descr">
                        Wake up! Wake up! We're doomed. Do you think they'll melt us down? Don't shoot! Don't shoot! Will this never end? Luke, tell
                        Owen that if he gets a translator to be sure it speaks Bocce. It looks like we don't have much
                        of a choice but I'll remind him. I have no need for a protocol droid. Sir -- not in an environment
                        such as this -- that's why I've also been programmed for over thirty secondary functions that...
                        What I really need is a droid that understands the binary language of moisture vaporators. Vaporators!
                        Sir -- My first job was programming binary load lifter...very similar to your vaporators. You
                        could say... Do you speak Bocce? Of course I can, sir. It's like a second language for me...I'm
                        as fluent in... All right shut up! I'll take this one.
                    </p>

                </div>

                <!-- Section Card Author -->
                <div class="tt-sect__card__auth">
                    <span>By</span>
                    <strong>Artoo Deetoo</strong>
                </div>

            </a>
        </li>

        <!-- Section Card -->
        <li class="tt-sect__cards__item">
            <a href="#" class="tt-sect__card">

                <!-- Section Card Image -->
                <div class="tt-sect__card__img" style="background-image: url('https://i.pinimg.com/originals/5a/15/ff/5a15ff56476820faceb111d4021e9378.jpg');"></div>

                <div class="tt-sect__card__cont">

                    <!-- Section Card Title -->
                    <h3 class="tt-sect__card__title">
                        That Old Man
                    </h3>

                    <!-- Section Card Description -->
                    <p class="tt-sect__card__descr">
                        Hello there! Come here my little friend. Don't be afraid. Don't worry, he'll be all right. What happened? Rest easy, son,
                        you've had a busy day. You're fortunate you're still in one piece. Ben? Ben Kenobi! Boy, am I
                        glad to see you! The Jundland wastes are not to be traveled lightly. Tell me young Luke, what
                        brings you out this far? Oh, this little droid! I think he's searching for his former master...I've
                        never seen such devotion in a droid before...there seems to be no stopping him. He claims to
                        be the property of an Obi-Wan Kenobi. Is he a relative of yours? Do you know who he's talking
                        about?
                    </p>

                </div>

                <!-- Section Card Author -->
                <div class="tt-sect__card__auth">
                    <span>By</span>
                    <strong>Ben Kenobi</strong>
                </div>

            </a>
        </li>

        <!-- Section Card -->
        <li class="tt-sect__cards__item">
            <a href="#" class="tt-sect__card">

                <!-- Section Card Image -->
                <div class="tt-sect__card__img" style="background-image: url('http://www.mikeverta.com/Posts/R2_Tantive_900.jpg');"></div>

                <div class="tt-sect__card__cont">

                    <!-- Section Card Title -->
                    <h3 class="tt-sect__card__title">
                        Evil Sandpeople
                    </h3>

                    <!-- Section Card Description -->
                    <p class="tt-sect__card__descr">
                        It looks like Sandpeople did this, all right. Look, here are Gaffi sticks, Bantha tracks. It's just...I never heard of them
                        hitting anything this big before. They didn't. But we are meant to think they did. These tracks
                        are side by side. Sandpeople always ride single file to hide there numbers. These are the same
                        Jawas that sold us Artoo and Threepio. And these blast points, too accurate for Sandpeople. Only
                        Imperial stormtroopers are so precise. Why would Imperial troops want to slaughter Jawas? If
                        they traced the robots here, they may have learned who they sold them to. And that would lead
                        them home! Wait, Luke! It's too dangerous. Uncle Owen! Aunt Beru! Uncle Owen!
                    </p>

                </div>

                <!-- Section Card Author -->
                <div class="tt-sect__card__auth">
                    <span>By</span>
                    <strong>Han Solo</strong>
                </div>

            </a>
        </li>

        <!-- Section Card -->
        <li class="tt-sect__cards__item">
            <a href="#" class="tt-sect__card">

                <!-- Section Card Image -->
                <div class="tt-sect__card__img" style="background-image: url('https://starwarsblog.starwars.com/wp-content/uploads/2018/04/Chewbacca-header.jpg');"></div>

                <div class="tt-sect__card__cont">

                    <!-- Section Card Title -->
                    <h3 class="tt-sect__card__title">
                        Red Leader, Standing By
                    </h3>

                    <!-- Section Card Description -->
                    <p class="tt-sect__card__descr">
                        Red Leader... This is Gold Leader. We're starting out attack run. I copy, Gold Leader. Move into position. Stay in attack
                        formation! The exhaust post is... marked and locked in! Switch power to front deflector screens.
                        How many guns do you think, Gold Five. I'd say about twenty guns. Some on the surface, some on
                        the towers. Death Star will be in range in five minutes. Switching to targeting computer. Computer's
                        locked. Getting a signal. The guns...they've stopped! Stabilize your read deflectors. Watch for
                        enemy fighters.
                    </p>

                </div>

                <!-- Section Card Author -->
                <div class="tt-sect__card__auth">
                    <span>By</span>
                    <strong>Wedge Antilles</strong>
                </div>

            </a>
        </li>

        <!-- Section Card -->
        <li class="tt-sect__cards__item">
            <a href="#" class="tt-sect__card">

                <!-- Section Card Image -->
                <div class="tt-sect__card__img" style="background-image: url('https://images.tbs.com/tbs/w_1800/https%3A%2F%2Fi.cdn.tbs.com%2Fassets%2Fimages%2F2017%2F04%2FStarWarsThePhantomMenace-1600x900.jpg');"></div>

                <div class="tt-sect__card__cont">

                    <!-- Section Card Title -->
                    <h3 class="tt-sect__card__title">
                        They're On Dantooine
                    </h3>

                    <!-- Section Card Description -->
                    <p class="tt-sect__card__descr">
                        Not after we demonstrate the power of this station. In a way, you have determined the choice of the planet that'll be destroyed
                        first. Since you are reluctant to provide us with the location of the Rebel base, I have chosen
                        to test this station's destructive power... on your home planet of Alderaan. No! Alderaan is
                        peaceful. We have no weapons. You can't possibly... You would prefer another target? A military
                        target? Then name the system! I grow tired of asking this. So it'll be the last time. Where is
                        the Rebel base? Dantooine. They're on Dantooine.
                    </p>

                </div>

                <!-- Section Card Author -->
                <div class="tt-sect__card__auth">
                    <span>By</span>
                    <strong>Leia Organa</strong>
                </div>

            </a>
        </li>

    </ul>

</section>

<?php get_footer(); ?>



