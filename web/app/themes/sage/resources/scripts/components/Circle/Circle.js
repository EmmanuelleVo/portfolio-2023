import {settings} from "@scripts/components/Circle/settings";


export default class Circle {
    constructor(canvas, ctx, mouse) {
        this.canvas = canvas
        this.ctx = ctx
        this.mouse = mouse
        this.radius = Math.floor(settings.radius.min + Math.random() * (settings.radius.max - settings.radius.min))
        this.originalRadius = this.radius;
        this.maxRadius = Math.min(this.originalRadius * 1.5, this.originalRadius + 30);
        this.alpha = 0.5 + Math.random() * 0.5 //Math.random()
        this.randomDirection = Math.round(Math.random()) * 2 - 1
        this.speed = {
            x: Math.random() - 0.5,
            y: (settings.speed.min / settings.speed.max) + settings.speed.min
        }
        this.position = {
            x:this.radius + Math.random() * (this.canvas.width - 2 * this.radius),
            y:this.radius + Math.random() * (this.canvas.height - 2 * this.radius)
        }
        this.color = settings.colors[Math.floor(Math.random() * settings.colors.length)].toString();
        this.minRadius = this.radius
    }

    draw() {
        this.ctx.fillStyle = this.color
        this.ctx.globalAlpha = this.alpha
        this.ctx.beginPath()
        this.ctx.arc(this.position.x, this.position.y, this.radius, 0, 2 * Math.PI, false)
        this.ctx.fill()
        this.ctx.closePath()
    }

    update() {
        //Checking edges
        if(this.position.y + this.radius > this.canvas.height || this.position.y - this.radius < 0) {
            this.speed.y = -this.speed.y
        }
        if(this.position.x + this.radius > this.canvas.width || this.position.x - this.radius < 0) {
            this.speed.x = -this.speed.x
        }
        this.position.y +=  this.speed.y * this.randomDirection
        this.position.x += this.speed.x * this.randomDirection


        //Interact with the mouse
        // if (this.position.x >= this.mouse.x - this.mouse.zoneSize/2 &&
        //     this.position.x <= this.mouse.x + this.mouse.zoneSize/2 &&
        //     this.position.y >= this.mouse.y - this.mouse.zoneSize/2 &&
        //     this.position.y <= this.mouse.y + this.mouse.zoneSize/2) {
        //     if (this.radius < Circle.maxRadius) {
        //         this.radius += 1
        //     }
        // } else if(this.radius > this.minRadius) {
        //     this.radius -= 1
        // }

        if (this.mouse.x && this.mouse.y) {
            const dist = Math.hypot(this.position.x - this.mouse.x, this.position.y - this.mouse.y);
            if (dist < this.mouse.zoneSize) {
                this.radius = Math.min(this.radius + 1, this.maxRadius);
            } else {
                this.radius = Math.max(this.radius - 1, this.originalRadius);
            }
        } else {
            this.radius = Math.max(this.radius - 1, this.originalRadius);
        }

        this.draw()
    }
    static get maxRadius() {
        return 100
    }


}