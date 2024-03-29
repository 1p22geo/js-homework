<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header>
        <h1>Data set generator</h1>
    </header>
    <div class="container">
    <section class="spacing"></section>
    <div>
    
        <article>
            <header><h2>Input information about the dataset here</h2></header>
            <h4>Downliad the dataset?</h4>
            <input type='checkbox' id='download'>
            <h4>Sampling frequency [Hz]</h4>
            <input id="f"/>
            <h4>Amount of samples to generate</h4>
            <input id="N"/>
            <h4>Add more harmonic frequencies</h4>
            <button onclick="addF()">Add another frequency</button>
            <div id="freqs">
                <div class="freq">
                    <h3>Main frequency</h3>
                    <p>
                    <span>1 Hz</span><input type="range" min="1" max="50" step="1" name = "frequency"><span>50 Hz</span>
                    </p>
                    <h3>Amplitude</h3>
                    <p>
                    <span>0%</span><input type="range" min="1" max="100" value="100" name = "amplitude"><span>100%</span>
                    </p>
                    <h3>Phase shift</h3>
                    <p>
                    <span>- &pi; rad</span><input type="range" min="<?php echo (-M_PI)?>" max="<?php echo (M_PI)?>" name = "phase" step='0.01'><span>&pi; rad</span>
                    </p>
                </div>
            </div>
            <br/><br/>
            <button onclick="calculate()">Create this dataset</button>
            <pre id="output"></pre>
            <h1>Graph:</h1>
</article>
        <section>
            <canvas id='canvas' width="1000" height="600"></canvas>
        </section>
    <!--div id="graph">
        <h4>Frequency spectre graph</h4>
    </div-->
    </div>
    <section class="spacing"></section>
    </div>
    <footer>Bartosz G 2022<br/><br/><a href="index.php">Decompose those datasets</a></footer>
    <script src="second.js"></script>
</body>
</html>