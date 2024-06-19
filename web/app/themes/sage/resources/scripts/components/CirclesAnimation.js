import Circle from "@scripts/components/Circle/Circle";
import {settings} from "@scripts/components/Circle/settings";

export default class CirclesAnimation {
    constructor() {
        this.canvas = HTMLCanvasElement = document.querySelector('#canvas')
        this.ctx = this.canvas.getContext('2d')
        this.circles = []
        this.mouse = {
            x: undefined,
            y: undefined,
            zoneSize: 50,
        }
        
        
        this.updateCanvasSize()
        this.circlesCount = this.canvas.width > 1024 ? 30 : 12
        if (this.canvas.width > 1550) {
            this.circlesCount = 30;
        } else if (this.canvas.width < 1550 && this.canvas.width > 769) {
            this.circlesCount = 20
        } else {
            this.circlesCount = 12
        }
        this.loadCircles()
        this.animate()
        this.addEventListeners()
    }
    
    loadCircles() {
        for (let i = 0; i < this.circlesCount; i++) {
            this.circles.push(new Circle(this.canvas, this.ctx, this.mouse))
        }
    }
    
    updateCanvasSize() {
        this.canvas.width = window.innerWidth
        this.canvas.height = window.innerHeight
    }

    addEventListeners() {
        window.addEventListener('resize', (e) => {
            this.updateCanvasSize()
        })
        window.addEventListener('mousemove', e => {
            //this.mouse.x = e.x;
            //this.mouse.y = e.y;
            const rect = this.canvas.getBoundingClientRect();
            this.mouse.x = e.clientX - rect.left;
            this.mouse.y = e.clientY - rect.top;
        })
    }

    animate() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.circles.forEach(circle => {
            circle.update();
        })
        requestAnimationFrame(() => {
            this.animate()
        })
    }

}