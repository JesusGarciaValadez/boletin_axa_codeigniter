                    <footer class="container footer clearfix">
                        <div class="article-related bit-3 centered clearfix">
                            <h3 class="bit-1 centered clearfix">Artículo relacionado</h3>
                            <p class="bit-1">
                                <a target="_blank" href="{related_article_link}">{related_article_title}</a>
                            </p>
                        </div>
                        <div class="bit-3 clearfix qualify frame">
                            <p class="bit-50">Califica</p>
                            <ul data-year="{anio}" data-month="{mes}" data-section="{rating_section}" class="bit-50 stars">
                                <li>
                                    <?= anchor(
                                        '#',
                                        'Una estrella',
                                        [
                                            'data-quality' => "1",
                                            'class' => "clearfix Star-2"
                                        ]
                                    ); ?>
                                </li>
                                <li>
                                    <?= anchor(
                                        '#',
                                        'Dos estrellas',
                                        [
                                            'data-quality' => "2",
                                            'class' => "clearfix Star-2"
                                        ]
                                    ); ?>
                                </li>
                                <li>
                                    <?= anchor(
                                        '#',
                                        'Tres estrellas',
                                        [
                                            'data-quality' => "3",
                                            'class' => "clearfix Star-2"
                                        ]
                                    ); ?>
                                </li>
                                <li>
                                    <?= anchor(
                                        '#',
                                        'Cuatro estrellas',
                                        [
                                            'data-quality' => "4",
                                            'class' => "clearfix Star-2"
                                        ]
                                    ); ?>
                                </li>
                                <li>
                                    <?= anchor(
                                        '#',
                                        'Cinco estrellas',
                                        [
                                            'data-quality' => "5",
                                            'class' => "clearfix Star-2"
                                        ]
                                    ); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="share bit-4 centered blue-square rounded shadow clearfix">
                            <h4 class="bit-2 clearfix">Compartir:</h4>
                            <p class="bit-20 share-icon">
                                <?= anchor(
                                        'http://www.facebook.com/sharer.php?u='.current_url(),
                                        img(
                                            [
                                                'src' => base_url( 'prevencion-360/images/face.jpg' ),
                                                'alt' => 'Facebook'
                                            ]
                                        ),
                                        array( 'target' => '_blank' )
                                );  ?>
                            </p>
                            <p class="bit-20 share-icon">
                                <?= anchor(
                                    'http://twitter.com/?status='. urlencode( $title ) . '+' . current_url(),
                                    img(
                                        [
                                            'src' => base_url( 'prevencion-360/images/twitter.jpg' ),
                                            'alt' => 'Twitter'
                                        ]
                                     ),
                                    array( 'target' => '_blank' )
                                ); ?>
                            </p>
                        </div>
                    </footer>