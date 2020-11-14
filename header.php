<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acemypaper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Roboto&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header"> 
    <div class="header__inner"> 

        <div class="header__logo">
            <a href="/">
                <img alt="Ace my paper" src="<?php bloginfo('template_url'); ?>/images/logo.svg">
            </a>
    </div>
    <div class="header__menu"> 
        <ul class="header__list"> 
            <li class="header__item has-submenu">
                <a class="header__link" href="#"><span>Articles</span></a>
                 <ul class="header__submenu"> <li class="header__submenu-item has-submenu-second"> 
                     <a class="header__submenu-link" href="/do-my-homework"> 
                        <span>Do my homework</span> 
                    </a> 
                    <div class="header__submenu-second-wrap"> 
                        <ul class="header__submenu-second"> 
                            <li class="header__submenu-second-item"> 
                                <a class="header__submenu-second-link" href="/chemistry-homework">Chemistry homework
                            </a> 
                        </li> 
                    </ul> 
                </div> 
            </li> 
            <li class="header__submenu-item"> 
                <a class="header__submenu-link" href="/buy">Buy research papers</a> 
            </li> 
            <li class="header__submenu-item"> 
                <a class="header__submenu-link" href="/papers-for-sale">Papers for sale</a> 
            </li> 
            <li class="header__submenu-item has-submenu-second"> 
                <a class="header__submenu-link" href="/write-for-money"> 
                <span>Papers for money</span> 
            </a> 
            <div class="header__submenu-second-wrap"> 
                <ul class="header__submenu-second"> 
                    <li class="header__submenu-second-item"> 
                        <a class="header__submenu-second-link" href="/research-papers">Research paper writing</a> 
                </li> 
                    <li class="header__submenu-second-item"> 
                        <a class="header__submenu-second-link" href="/research-proposal">Research proposal writing</a> 
                    </li> 
                        <li class="header__submenu-second-item"> 
                            <a class="header__submenu-second-link" href="/career">Career research paper</a> 
                    </li> 
                    </ul> 
                    </div> 
                    </li> 
                        <li class="header__submenu-item has-submenu-second"> 
                            <a class="header__submenu-link" href="/pay-for-papers"> 
                            <span>Pay for papers</span> 
                        </a> 
                        <div class="header__submenu-second-wrap"> 
                            <ul class="header__submenu-second"> 
                                <li class="header__submenu-second-item">
                                    <a class="header__submenu-second-link" href="/business">Business papers</a>
                                </li>
                                 <li class="header__submenu-second-item">
                                     <a class="header__submenu-second-link" href="/college">College papers</a>
                                </li> 
                                <li class="header__submenu-second-item">
                                    <a class="header__submenu-second-link" href="/management">Management papers</a>
                                </li> 
                                    <li class="header__submenu-second-item">
                                        <a class="header__submenu-second-link" href="/accounting-paper-online">Accounting papers</a>
                                    </li> 
                                <li class="header__submenu-second-item">
                                    <a class="header__submenu-second-link" href="/medical-papers">Medical papers</a>
                                </li>
                                 <li class="header__submenu-second-item">
                                     <a class="header__submenu-second-link" href="/nursing">Nursing paper help</a>
                                    </li> 
                                    <li class="header__submenu-second-item">
                                        <a class="header__submenu-second-link" href="/anthropology-paper-writing">Anthropology papers</a>
                                    </li> 
                                    <li class="header__submenu-second-item">
                                        <a class="header__submenu-second-link" href="/philosophy">Philosophy papers</a>
                                    </li> 
                                    <li class="header__submenu-second-item">
                                        <a class="header__submenu-second-link" href="/scientific-papers">Scientific papers</a>
                                    </li> 
                                    <li class="header__submenu-second-item">
                                        <a class="header__submenu-second-link" href="/sociology">Sociology papers</a>
                                    </li> 
                                    <li class="header__submenu-second-item">
                                        <a class="header__submenu-second-link" href="/psychology">Psychology papers</a>
                                    </li> 
                                    <li class="header__submenu-second-item">
                                        <a class="header__submenu-second-link" href="/mla-style-writing">MLA Style papers</a>
                                    </li>
                                     <li class="header__submenu-second-item">
                                         <a class="header__submenu-second-link" href="/apa-style-writing">APA Style papers</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/student-papers-online">Student papers</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/school-papers-help">School papers</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/physics">Physics paper writing</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/argumentative">Argumentative papers</a>
                                        </li>
                                     </ul> 
                                    </div> 
                                </li> 
                                <li class="header__submenu-item has-submenu-second"> 
                                    <a class="header__submenu-link" href="/thesis-writing-help"> 
                                    <span>Thesis writing service</span> 
                                </a> 
                                <div class="header__submenu-second-wrap"> 
                                    <ul class="header__submenu-second"> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/thesis-paper-writing">Thesis paper writing</a>
                                        </li> 
                                    </ul>
                                 </div> 
                                </li> 
                                <li class="header__submenu-item"> 
                                    <a class="header__submenu-link" href="/editing-service">Paper editing service</a> 
                                </li> 
                                <li class="header__submenu-item has-submenu-second"> 
                                    <a class="header__submenu-link" href="/purchase-online"> 
                                    <span>Purchase term papers</span>
                                 </a> 
                                 <div class="header__submenu-second-wrap">
                                      <ul class="header__submenu-second"> 
                                          <li class="header__submenu-second-item">
                                              <a class="header__submenu-second-link" href="/term-paper-writing">Term paper writing</a>
                                            </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/cheap-term-papers">Cheap term papers</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/mid-term-papers">Mid term papers</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/narrative">Narrative term papers</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/persuasive">Persuasive term paper</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/abortion">Abortion term papers</a>
                                        </li> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/history">History term papers</a>
                                        </li> 
                                    </ul> 
                                </div> 
                            </li> 
                            <li class="header__submenu-item has-submenu-second"> 
                                <a class="header__submenu-link" href="/paper-assistance"> 
                                <span>Paper help online</span> 
                            </a> 
                            <div class="header__submenu-second-wrap">
                                 <ul class="header__submenu-second"> 
                                     <li class="header__submenu-second-item">
                                         <a class="header__submenu-second-link" href="/writing-assistance">Paper writing help</a>
                                        </li> 
                                    </ul> 
                                </div> 
                            </li> 
                            <li class="header__submenu-item has-submenu-second"> 
                                <a class="header__submenu-link" href="/academic-writing">
                                 <span>Academic paper writing</span> 
                                </a> <div class="header__submenu-second-wrap"> 
                                    <ul class="header__submenu-second">
                                         <li class="header__submenu-second-item">
                                             <a class="header__submenu-second-link" href="/academic-writers">Academic paper writers</a>
                                            </li> 
                                        </ul> 
                                    </div> 
                                </li> 
                                <li class="header__submenu-item has-submenu-second"> 
                                    <a class="header__submenu-link" href="/custom-writing"> 
                                    <span>Custom writing service</span> 
                                </a> 
                                <div class="header__submenu-second-wrap"> 
                                    <ul class="header__submenu-second"> 
                                        <li class="header__submenu-second-item">
                                            <a class="header__submenu-second-link" href="/custom-written">Custom written papers</a>
                                        </li>
                                         </ul>
                                         </div> 
                                        </li> 
                                            <li class="header__submenu-item has-submenu-second"> 
                                                <a class="header__submenu-link" href="/online"> 
                                            <span>Online paper writing</span> 
                                        </a> 
                                            <div class="header__submenu-second-wrap"> 
                                                <ul class="header__submenu-second"> 
                                                    <li class="header__submenu-second-item">
                                                    <a class="header__submenu-second-link" href="/professional-paper-writing">Professional paper writing</a>
                                                </li> 
                                                    <li class="header__submenu-second-item">
                                                        <a class="header__submenu-second-link" href="/graduate-writing-service">Graduate paper writing</a>
                                                    </li> 
                                                        <li class="header__submenu-second-item"><a class="header__submenu-second-link" href="/mba">MBA paper writing</a>
                                                    </li> 
                                                    <li class="header__submenu-second-item">
                                                        <a class="header__submenu-second-link" href="/best-papers-writing">Best paper writing</a>
                                                    </li> 
                                                    <li class="header__submenu-second-item">
                                                        <a class="header__submenu-second-link" href="/original-paper-writing">Original paper writing</a>
                                                    </li> 
                                                    <li class="header__submenu-second-item">
                                                        <a class="header__submenu-second-link" href="/english">English paper writing</a>
                                                    </li> 
                                                    <li class="header__submenu-second-item">
                                                        <a class="header__submenu-second-link" href="/economics-writing-help">Economics paper writing</a>
                                                    </li> 
                                                    <li class="header__submenu-second-item">
                                                        <a class="header__submenu-second-link" href="/law-papers-online">Law paper writing</a>
                                                    </li> 
                                                    <li class="header__submenu-second-item">
                                                        <a class="header__submenu-second-link" href="/physics">Physics paper writing</a>
                                                    </li>
                                                 </ul> 
                                                </div>
                                             </li>
                                              <li class="header__submenu-item"> 
                                                  <a class="header__submenu-link" href="/ghostwriting">Ghostwriting service</a> 
                                                </li> 
                                                <li class="header__submenu-item"> 
                                                    <a class="header__submenu-link" href="/assignment-help">Assignment writing help</a> 
                                                </li> 
                                                <li class="header__submenu-item">
                                                    <a class="header__submenu-link" href="/essay-paper-service">Essay paper service</a>
                                                </li> 
                                            </ul> 
                                        </li> 
                                        <li class="header__item">
                                            <a class="header__link header__link" href="/pricing">Pricing</a>
                                        </li>
                                         <li class="header__item">
                                             <a class="header__link header__link" href="/contact">Contact</a>
                                            </li> 
                                        </ul>
                                        <a class="header__login-btn" href="/manage/login">
                                        <span>Sign In</span>
                                    </a>
                                    <a class="header__btn site-btn" href="/manage/signup">Order Now</a> 
                                </div> 
                                <div class="tablet__header">
                                    <a class="header__btn site-btn tablet" href="/manage/signup&quot;">Order Now</a>
                                    <a class="header__mobile-menu" href="#"></a>
                                </div> 
                            </div> 
                        </header>