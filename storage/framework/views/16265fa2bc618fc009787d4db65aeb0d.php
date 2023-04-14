<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/main3.css">

        <title>Login</title>
    </head>
    <body>
        <div>
            <nav class="navbar" style="background-color: #ed212b;">
                <ul class="nav justify-content">
                    <li class="nav-item">
                        <a class="nav-link" style="color: #ffffff; font-size: 25px;" href=""><b>TelU Guide</b></a>
                    </li>
                </ul>
                <ul class="nav justify-content-rigth">
                    <li>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYAAAACDCAMAAACz+jyXAAAA4VBMVEX///8jHyCAgoUAAADtHSSxERZYWVsIAAARCgx5e36vrq4cGBkUDQ+2tbUbFhcYExSHhYW/vr9PTU3FxcVVVlgLAAPU1dZ1c3StAADLy8ympqaZmJj5+flubW3TJivys7SSkJDsAADesrMoJCU8ODnf3t5jYWLtChVEQULw8PDxhIbQgYKNjIzo6Oje3d16eHg0MTKwAQv78PDtW17ykZP0r7D2yMn429znxsbSjY6/VVfpDhjsNzzsQ0fwZmnudXf0nZ/bp6jGd3jIZmi9P0K1MDP41tfvb3LRAAnyi43z4+OtxpfeAAAQZElEQVR4nO2de2ObNhfG7Sj1DeML8aU2dps0sRM2X5J0a9pmb9c2W7vt+3+gFyRA5wgJJExjJ+X5KxFIgvND9yO5UilV6mfX67e//f7u7nZWUHKz2//ev/nw8U1Byf0Een12eUZ1/8f/3n769OefvwT697fPv79+d5eGZeZb+suXD79Sff368PDxr79fRioBaOv12XGke1+XXAGV40+fv0ki3X15ePFS1M3NzYtQJQB9AQAy3fscfrlDMe5+Dcz9Ik0lAH1lAAh0efY/Xgze/5Vh/BKAmTQA+OXg7O0tvfv248ubTPOXAEykBSBA8Nq/+Y3G118CMJMmgOPjs++VBz3zlwBMpA3g+PIfXfuXAAykD+D4la79SwAGKgHsWSWAPasEsGeVAPas5wNgPXUDtTwcPKGhbn8PT6SlRwUwGdc0NZ6YvkiL1BuB6gRFdciQBpOLombcC9ZjAnBJt6OpNpmavceaVCMRYOpVHDwc72ClH6hHBABspCHiydJQyh3ymDYP7oAEd7LTD9MjArDNAJjV2qeNOGa9xYNBluQw66BHBNCqGwGwZWkoVQIoAeRTCWDPekQAE7M2wKwj+oQB3BcO4EbRDb1u69u/fWH2Hk8WwLfvf1CvlEus+/sklySAm5uEb0Sgvx/upHl5DsFqAIt38aWBobmeLIBAt9/evf78+bdfgL6/Dbhc3isBMEt/fPj6K9eHD1/evL+7TclpvUFyudW64wW4MFqbvsOTBqDQ7bffv/sQJAB82z98SbW0nmzeLLd7uyX1HAFQvfseI3gVm//r+2ISLwHo6PbfsJ1+FZr/Q2FvUgLQ0+2nsxjAy4fda55Y2QBm/d7SETR3JT3UHAA2qyjpeWIKey5muuzZ0smpCbuzNoXxlttp3IiNWr0wsdq2Zdy0RaKjhVfqDmZOZQFYzAlpdy2sTrdByKloTXMAc9LohEmiqdeZWyeNbkfMtU3IcpN4wilhj9chg4o7jOJ12nXijPzLmy0h9egNgtCrk5ymuvM7RK98+/+XM75cGQB6pFtVqCEOlI0BOENwCXzcfQIuYHXJVnjCGU+/O8TxOmS7rhFx5GMRx2yWN9bt8f2rmxcFVj+BUgHMrlKnLgRjmAKYQ/sDmL3U4frwGpvvJO3uNulIQrskWY60dHv56mXB9k8HcK38/EOzoRUWQwBTeAFknW5/33xVhDEVgPLBcxK4+6fY+qeSDqCWOW+Bam4zAHBaqj0AD5Rp0K4DHzIXAGuYsz9W9PefCkBn9QZW3UYAPBBsnVek4cpMIfZcAKrtebFmzK8UADrzdvBFjABcw5VK0DXc6uQKlzbzAchdCRUuNQBcAKx2IxRuF0ARMAEwB5OABPQLZ4I5LVmeVQKSFwD4zylpuPzQtoVC2ofiIKAGsIQvQpzVaagx6tgBUxsAcGGgCx8HUycDlu24jjqYHdBmIAAN4vROt12BYpdc9U6PznHooTgIqAHA58VLM/Dz7fI6SB8AbIAbqDZGNVDD4XXTKTIfsB4E0Dhl5bGFbu6OWehJBxYCMtrBagVKCQC2hg0XR7rib2LxVRttADDpDl71cUDTAL9zoWyAVgMA6MbjkoX065lVAQHD9dYfJiWADTTcAkeCS8vtOFQbwDWwwxAPq+AlwS0JVong84UAeL0OywAvviMQOjR0O/tR0gMgjN374Fo9DtUFsIQNsNAZOeeXukIzCeutTAAVOMrm9ScoYE8agL0LANQAi/UAACBayDMCsOSmBgDAIz5pALuUANhoksTkBwAA0wg0MwIw5xUWAOA+EwBTUMANAUDv1PagIqoEEGuTbDwjnUBXCiMAvoVBB+q8klAJIBYEUBV8WcAVQwBL0M+XOV/vBYA3SmpjsmbgbSQpaCagB0At6zqOkQ2gvYJGlPnd7QXAZNyUydabMZ3Z0ti6+1t2BdBdxjGyAVTB9y8O7pj2A6B5JFOzKQx/pFo0FbEfCQB4Dw0AYJwrawEOC8DR0TibwGKsiPtYAIxmQztwNNuQzUceFoCjZqb91FEfBwA55TF0uqFwUpNI3BMODUDWHqH+ngHU4eqgTi8IDuFkfloHBiCzCKTEfAQAnRyL8rAf2q0lHufgAKT7ca33B8AKHJ9wHloA0JJXciPswQFIN2P+mLFyDcQIsZykk5/eXBCuhMQ0Dg5A+qqB/UgA9JxqNWdDYSVkiZtwDg6A8BCCWo8FQGtYrQkAVUL1FU7j4ACkzxhNnyIAoRLCS7MlgFhpS5JyaS9JokrIQmkAAOJcxfonBqA3dasNAFVC2CsCALCucPJwIfpnAIAcC7o6Sem7peBKCI42LyzFhUoF+ZTwpeRnCwB9pl0dl3oDxyzs9AXSxhdg++AoojxbAMhDpGqRpSSTXg82lAYABLr8ZmCh4P5e2Ph4rSpyOOS+MIYA+FzU4QPoIVtUO22ZyDUfIpj4hmI3K/6W0HMneKRo4Ic3irTBzpDnC2CBbaHQkNvCyDsa1zW8l3WOfWjlgnXT8wVQqWXsjwlfL77fCACqhMC6ps6mhA6cg33GAPTON8sJAFt6yLN2ZLu6hCzhDNIzBqB3wFleALiAcSN5JKsSwnOozxkA8iIsHADei9GIL20yCBA8ffTUAYDnHyb9FFrSbZ5IfIw25SzhGIr7sltVlDgqYG3uXbE+V24TDvrDgklAv6kB0IA+HBi1gSyBW+peAVSs2MSyKbe1k9jojAX2t/DKowP66QCx6Iq7hd863LGyIkN5KegSJzEtxffSwimrdZw2OneqE91sgfz2C2B9HvW15TFG22FiOQYI7tUexZ5zaJ2lHyWQmFvvX4DjoeAFz72W5jaWbGvx4lvR1MXICkMv4HflXYWhXeAXv18A/qP2A6Xcv570VRJWtNiNCSutqWRJz9aRxCve6ETIa6Jan2UvkPCxGEkfZpN8230D+OlVAtizSgB7VglgzyoB7FklgD2rBLBnpQA4ygCgjlgC0NcoBYB0G0ksNwWA9lEIskHQem2wRWo22oz2cx6l5+ecFaKhNABHqTFT4ukC8BrBwBzf7AZBS0WE5OPTof0+jt+xac7wU5nQEC0vJqBFCoDUg51m8xQAmk/hBlOY+BAwNoGsfXY9nfhtiIcZPoaoD0sdVhLLXM/ipQFI+5Anqv1JAQDNOoRO4gs+UAyA7vGa9KXbewOAHOjoAQXiIROZmqUAGK9SIq5SImbvbmLaHcA8mK8eJhZzHkFXgbnR+kA+AKlV+ZW6efOuDgLAoh7M7uY+EXgH0Rr/GhooJ4C0zoyj7gedOrm7TyCRnQH4X4KX8yjanSXmnBNA2j6LwZWqf7G5GuTe2cElATAzBXA4YgCM26OUfmhzMFD8kshsUEsDoNsb1gLQt+1gtWk2sft9O7nE4YdGfa6F/7f4vMEqDfhQvWihxe4LPbUTm9048q/Z9gbEsMMIQThIagSXhIJknaBZtmr0ZhvUihs/HshshJNJa4WbvpnlPfJlOgDdkZEOALrmd75Zxn6CqH7rg/XMGUmMKtiKYZzBYgCXGM9hQd3SoPVptIIZXpvNhXXJ2HQu7PXTu6xwvZfg8QB7xPiFWiwjkPUqDYBPIFnFesvgghpAWucJSQMA81G0wDnqBN6PuqHBrVYdpkYPKIvP3+tjNwuLgIEOW7yPf1YoPIViIXoF8KV92g2NfDmSHjTcy4MOVfipFoNOVfABSdlv7du5NnDE+vjEoeH5d3jH0gAg2bDaACO3OQQw7gpjOJZY5Cc0SiQFDs0SrjGDzeqif4QAoKENIGY9SIwf1Pt9KYBazZnDcelk7tDQFADavULtElBlx9h2RCtgAPRkPdgNYftaIo+scP8FPYU3/LB5RRFn02WO19RC4zaPQTXkdQcC4BD/ohU/Z/D7xXFVmAlAPRIIAfiFYOBO1t7MW5+4AycKVFdBuvY3ANCmx9jW2D8WLwIIADutEPjcULesqPSHZam+DU7D7bFzVLk3FbvYIRfbXiA6wApP6mus3Fi8McUj4anrTmlulsN+2Js3RdkAlHVQBIAyYAIhylj6v0OrDaDdYy1RuL2I2xgD6LVR+WAOvpHHTlgcwk94RhsV7upMb+0sUeFlrmyJ/dxMqqmIRDc0G4CyHwQAJKUGoD87rA0gnu9kpwuDc7gRAFrLd+L2ju14iWhR10yeGY3JXdNZa4EHMDR+RzEzqz0XlA1AubaVC0DGOhqSPoCoRIcfpQJAhZWPqN9G91vEFxkAB8UUAWD3OQrAwpO1sYoEoJoRzQfAYGKmcADUZLjXE/eKBADUgOkAWIWXdGrk8QsCoFpdzAXA5EDGwgHQu6MEaYvAt9SF3uHDuq9Glw2b+HERMgChD3udjv/q9eoysae1KACefG4/D4CxydRY4QCYWcJmM2y+o0uuxO+c/5KCDIBwbH3wUwD87QoFoJiRywFAex6OvWDhAOixumwQdIKbbykA3luXAqhc4c2a1W4nzrlYAPLTr/KUAJmdlSoeAO26s5qdtbL8eMQEAKsN1lPkACo14bfk2vE5WwUDkM6JmgPQd4egKh4A22YXfPYsIfCmDIDF59Wue6C/oABQOVnWo1lAXGYKBiDtihoDMOmCBvoBAOhwKxjg2mjcVeG9IM/zZoHwo6gAcNm4TSkagGxCwrwEpDy/TKeSjvaOABjATlgUIFyhGyooGwAbBMZj58IBSAYDpgB0nSFisa2N6NCe9Y4A2AQ1GbF5HHjUDQMgPTK3ogWghYbSKgAJXx76iHw8rQRQGSX6ooYAZHuo0sWqZTTSYTs8+ZyyMQA6emr3Wixp8Emw3x1QeRxpAFiiif0kgPDRxZmYcPYkehI1gMqJaFIzAE3zddxobm17Eqo/YF0VbjhjAMyU53RqEv0UUvgzMMQFO7+EWAkA60l8IPxkSxuVelSmkgDCVv7apm8Sz5uyDbRWtUXfcHKlBpAYDRgBMJgEFV4bnEsSLlmB8xjMAdBlGfabUXhratinb4AFRt5ESAG04GIkWxuIs04CCE9XsMJu0wkOrobBbBpc4TciEDABYDYCi6TYDQ+cPc0BgB88wtWB5PAD3kmSAkCnFrEIcaOSBFDZwnNt+CLkNjkCVAEQlgYMAOT6/n0tJQQs2Chs0gGwNWHc84iTFBvE5I8FZwBIHF8Djku+llQlDsgA/LZB8peplQBwS6wPwHAABuQS0kCnMDXIOWong8uN2OLr4N/6NYgerB/i4YdNopREH+GWkNmQr+w4NCHBDWpM8JPBjLY0gtDurXgG8FcqQXA7A0BlDX6TQRdA82gH38CZvepBuUI3ZR0Ecktu/P9WsG/Tw0eXBRr1toFWkqfqn8K8wB2z4EKih+Siu/HPigTXEuXei98GfRSzvttjtupdZwCozNymIYCmu58dEk9TtZReUKh415IegHI/kpGcbABxIdAB0JyWn7+J2FSJ5HAerAX1/s8G0FyZ7sj5KRUfCrIesUPRSHanceMjyALQXB3Kb6MftLwOGM6xjq3WkfyL6dxRExg482n59WvJTQwDiKb3rDddOlIGA8dZTve1L+LJaSWsa+JfH8rQ2u5RhzhfgeF9Bf/27H1sCnqqahELqNMgpptovIntHs2XvvGX855rT8pP31C9iyuuQdlvKVWqVKlSvv4P4t8KFs+AH6QAAAAASUVORK5CYII="
                    width="200">
                    </li>
                </ul>
            </nav>       
        </div>
            
        <div class="container">
            <div class="text-center">
                <div class="col-md-8 col-lg-6 col-xl-5 p-0 mx-auto">
                    <h3 class="font-weight-bold my-4"><b>LOGIN</b></h3>
                </div>
            </div>
        </div>
        <div class="col-md-8 container">
            <div class="box">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
                            
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
                <p></p>
                <p><a href="#">Forgot your password?</a></p>
                
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <center>
                                <a href="/dashboard" target="_blank">
                                <button class="btn btn-primary">Login</button></a>
                            </center>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\tubes2\resources\views/ila/login.blade.php ENDPATH**/ ?>