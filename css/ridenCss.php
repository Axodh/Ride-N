body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    background-image: url(<?php echo (isset($back))? 'images/road.jpeg':'images/car.jpg'; ?>);
    background-size: cover;
}

main { flex: 1 0 auto; }

.smol {
    font-variant: small-caps;
    font-weight: bold;
}

.pad { padding: 8px; }

/* label color */
.input-field label { color: #404040; }

.input-field input { border-bottom: 1px solid #404040 !important; }

/* label focus color */
.input-field input:focus + label { color: #404040 !important; }

/* label underline focus color */
.input-field input:focus {
    border-bottom: 1px solid #404040 !important;
    box-shadow: 0 1px 0 0 #404040 !important;
}

.dark-grey-text {
    color: #777 !important;
}