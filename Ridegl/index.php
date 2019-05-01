<?php require_once "../functions.php"; ?>

<head>
    <title>Demo WebGL</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        <?php require_once "../css/ridenCss.php" ?>
        body { background-color: #d7cbb0 }
    </style>
</head>

<body>

<script src="Js/three.js"></script>
<script src="Js/OrbitControls.js"></script>
<script src="Js/functions.js"></script>
<script src="Js/ColladaLoader.js"></script>
<script src="Js/WebGL.js"></script>
<script src="Js/stats.min.js"></script>
<script>

    if ( !WEBGL.isWebGLAvailable() ) { document.body.appendChild( WEBGL.getWebGLErrorMessage() ); }

    var camera, controls, scene, renderer;
    var mr, doge, avatar;
    var x, y, z;
    var sky;
    var stats, clock;
    var mixer1, mixer;

    var listener = new THREE.AudioListener();
    var sound = new THREE.Audio( listener );
    var audioLoader = new THREE.AudioLoader();

    init();
    animate();
    render();

    function init() {

        renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setPixelRatio( window.devicePixelRatio );
        renderer.setSize( window.innerWidth , window.innerHeight -62);
        document.body.appendChild( renderer.domElement );


        clock = new THREE.Clock();
        scene = new THREE.Scene();
        //scene.background = new THREE.Color( 0xcccccc );
        //scene.fog = new THREE.FogExp2( 0xcccccc, 0.002 );

        camera = new THREE.PerspectiveCamera( 60, window.innerWidth / window.innerHeight, 100, 10000 );
        camera.position.set(0,1000,1000);


        var controls = new THREE.OrbitControls( camera);
        controls.minDistance = 100;
        controls.maxDistance = 3000;
        controls.maxPolarAngle = (Math.PI / 2/1.5);


        var path = "texture/skybox/";
        var format = '.png';
        var urls = [
            path + 'right' + format,
            path + 'left' + format,
            path + 'top' + format,
            path + 'bottom' + format,
            path + 'back' + format,
            path + 'front' + format
        ];
        var reflectionCube = THREE.ImageUtils.loadTextureCube(urls);
        reflectionCube.format = THREE.RGBFormat;
        var shader = THREE.ShaderLib[ "cube" ];
        shader.uniforms[ "tCube" ].value = reflectionCube;
        var material = new THREE.ShaderMaterial( {
            fragmentShader: shader.fragmentShader,
            vertexShader: shader.vertexShader,
            uniforms: shader.uniforms,
            depthWrite: false,
            side: THREE.BackSide
        });
        sky = new THREE.Mesh(new THREE.BoxGeometry(10000, 10000, 10000), material);
        sky.position.set(0, 0, 0);
        scene.add(sky);

        //Le son
        //Ambiancial sound
        var listener = new THREE.AudioListener();
        camera.add( listener );

        var sound = new THREE.Audio( listener );
        var audioLoader = new THREE.AudioLoader();
        audioLoader.load( 'sound/Mr.mp3', function( buffer ) {
            sound.setBuffer( buffer );
            sound.setLoop( true );
            sound.setVolume( 1 );
            sound.play( true );
        });

        //route
        cube("Texture/road.jpg",500,50,500,2125,16,-200,1.6);
        cube("Texture/road.jpg",500,50,500,1750,16,-190,1.6);
        cube("Texture/road.jpg",500,50,500,1375,16,-180,1.6);
        cube("Texture/road.jpg",500,50,500,1000,16,-170,1.6);
        cube("Texture/road.jpg",500,50,500,625,16,-160,1.6);
        cube("Texture/road.jpg",500,50,500,250,16,-150,1.6);
        cube("Texture/road.jpg",500,50,500,-125,16,-140,1.6);
        cube("Texture/road.jpg",500,50,500,-500,16,-130,1.6);
        cube("Texture/road.jpg",500,50,500,-875,16,-120,1.6);
        cube("Texture/road.jpg",500,50,500,-1250,16,-110,1.6);
        cube("Texture/road.jpg",500,50,500,-1625,16,-100,1.6);
        cube("Texture/road.jpg",500,50,500,-2000,16,-90,1.6);
        cube("Texture/road.jpg",500,50,500,-2375,16,-80,1.6);
        cube("Texture/road.jpg",500,50,500,-2750,16,-70,1.6);



        //red moulin
        var loadingManager = new THREE.LoadingManager( function () { scene.add( mr ); } );

        // collada
        var loader = new THREE.ColladaLoader( loadingManager );
        loader.load( 'dae/model.dae', function ( collada ) {
            mr = collada.scene;
            mr.position.set(0,0,0);
            mr.scale.set(1,1,1);
        } );

        var loadingManager = new THREE.LoadingManager( function () { scene.add( lexus ); } );

        // collada
        var loader = new THREE.ColladaLoader( loadingManager );
        loader.load( 'dae/Lexus.dae', function ( collada ) {
            lexus = collada.scene;
            lexus.position.set(0,-5,-15);
            lexus.scale.set(20,20,20);
            lexus.rotation.z = 1.6;
        } );


        // //  Positional sound sur la tutur
        var CamaroListener = new THREE.AudioListener();
        camera.add(CamaroListener);

        var CamaroSound = new THREE.PositionalAudio(CamaroListener);

        var CamaroAudio = new THREE.AudioLoader();
        CamaroAudio.load('sound/Om.mp3',
            function(buffer){
                CamaroSound.setBuffer(buffer);
                CamaroSound.setLoop(true);
                CamaroSound.setDistanceModel(10);
                CamaroSound.setVolume(10);
                CamaroSound.play(true);
            });

        //collada doge
        var loadingManager = new THREE.LoadingManager( function () {
            scene.add(doge);
            doge.add(CamaroSound);
            animate(doge);
        } );

        var loader = new THREE.ColladaLoader( loadingManager );
        loader.load( 'dae/doge/doge.dae', function ( collada ) {
            doge= collada.scene;
            doge.position.set(2100,100,-270);
            doge.scale.set(3,3,3);
            doge.rotation.z = 1.6;
        } );

        // danseuse
        //
        // var loader = new THREE.ColladaLoader();
        // loader.load( 'dae/Dance.dae', function ( collada ) {
        //
        //   var animations = collada.animations;
        //   var avatar = collada.scene;
        //
        //
        //   avatar.traverse( function ( child ) {
        //     child.castShadow = true;
        //     child.receiveShadow = true;
        //
        //   } );
        //   mixer = new THREE.AnimationMixer( avatar );
        //   var action = mixer.clipAction( animations[ 0 ] ).play();
        //   scene.add( avatar );
        //   avatar.position.set(600,170,-600);
        //   avatar.scale.set(70,70,70);
        // } );
        //
        // window.addEventListener( 'resize', onWindowResize, false );


        //stats
        stats = new Stats();
        document.body.appendChild( stats.dom );
        controls.update();
        window.addEventListener( 'resize', onWindowResize, false );


        //lumière
        var light = new THREE.AmbientLight( 0xf7f4f7 );
        scene.add( light );
        /*
        spotLight = new THREE.SpotLight( 0xffffff, 1 );
        spotLight.position.set(0,1200,0 );
        spotLight.scale.set(10,10,10)
        spotLight.angle = 0;
        spotLight.penumbra = 0;
        spotLight.decay = 0;
        spotLight.distance = 500;
        spotLight.intensity = 100;

        spotLight.castShadow = true;
        spotLight.shadow.mapSize.width = 1024;
        spotLight.shadow.mapSize.height = 1024;
        spotLight.shadow.camera.near = 10;
        spotLight.shadow.camera.far = 200;
        scene.add(spotLight);

        var spotLightHelper = new THREE.SpotLightHelper( spotLight );
        scene.add( spotLightHelper );
        */
    }

    function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize( window.innerWidth, window.innerHeight-62 );
    }

    function animate() {
        requestAnimationFrame( animate );

        doge.position.x -= 10;
        doge.position.z += 0.25;
        if(doge.position.x <= -2750){
            doge.position.x = 2100;
            doge.position.z = -270;
        }
        render();
        stats.update();
    }

    function render() {

        var delta = clock.getDelta();
        if ( mixer !== undefined ) { mixer.update( delta ); }
        if ( mixer1 !== undefined ) { mixer1.update( delta ); }

        renderer.render( scene, camera );
    }
</script>

<footer class="page-footer transparent">
    <div class="container">
        <div class="row">
            <div class="col s12 center smol">
                <a href="../index.php" class="white-text">retour à l'accueil</a>
            </div>
        </div>
    </div>
</footer>
</body>
