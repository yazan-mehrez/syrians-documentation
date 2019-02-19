<?php include 'header.php' ?>
    <div class="wrapper">
        <aside class="doc__nav">
            <ul>
                <li class="category">Components</li>
                <li class="js-btn selected">Comment</li>
                <li class="js-btn">Error</li>
                <li class="js-btn">Footer</li>
                <li class="js-btn">Group</li>
                <li class="js-btn">Header</li>
                <li class="js-btn">Homepage</li>
                <li class="js-btn">Latest Products</li>
                <li class="js-btn">Main</li>
                <li class="js-btn">News Feed</li>
                <li class="js-btn">Page</li>
                <li class="js-btn">Post</li>
                <li class="js-btn">Product</li>
                <li class="js-btn">Profile</li>
                <li class="js-btn">Register-Login</li>
                <li class="js-btn">Reply</li>
                <li class="js-btn">Trending</li>
            </ul>
        </aside>
        <article class="doc__content">
            <section class="js-section">
                <h3 class="section__title">Comment</h3>
                <p>Learn how to configure settings for Scribbler, such as your syntax highlighting preference and the
                    default saving folder location.</p>
                <h5 class="section__title">Search</h5>
                <p>Learn how to configure settings for Scribbler, such as your syntax highlighting preference and the
                    default saving folder location.</p>
                <div class="code__block code__block--notabs">
                    <pre class="shell-session">
                      <code class="language-typescript">
search(term: string) {
        let object = {user_id: this.comment.user_id, session_key: this.comment.session_key, name: term};
        setTimeout(() => {
            this._postService.mentionService(object)
                .subscribe(
                    response => {
                        this.result = response;
                        this.mentions = response.data;
                    }
                    // error => //console.log(error),
                )
        }, 1000)
    };
                      </code>
                    </pre>
                </div>
            </section>
            <section class="js-section">
                <h3 class="section__title">Error</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Footer</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Group</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Header</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Homepage</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Latest</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Main</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">News</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Page</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Post</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Product</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Profile</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Register-Login</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Reply</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>
            <section class="js-section">
                <h3 class="section__title">Trending</h3>
                <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex
                    per.
                    At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum
                    intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed.
                    Porro
                    verear eu vix, ne usu tation vituperata.</p>
                <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant
                    definiebas
                    concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant
                    lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea
                    te,
                    ne per tacimates suavitate vituperatoribus.</p>
            </section>


        </article>
    </div>
<?php include 'footer.php' ?>