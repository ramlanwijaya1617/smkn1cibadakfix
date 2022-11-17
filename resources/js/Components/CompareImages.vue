<template>
    <div class="container">
        <div class="gallery">
            <img :src="src" :alt="alt" />
            <img class="clipped" :src="srcCompare" :alt="alt" />
            <div class="dragger"></div>
        </div>
    </div>
</template>
<script>
import gsap from "gsap";
import Draggable from "gsap/Draggable";
gsap.registerPlugin(Draggable);

export default {
    props: {
        src: {
            type: String,
            required: true,
        },
        srcCompare: {
            type: String,
            required: true,
        },
        alt: {
            type: String,
            required: true,
        },
    },
    mounted() {
        const clipped = document.querySelector(".clipped");
        const gallery = document.querySelector(".gallery");

        //On mouse movement
        // gallery.addEventListener("mousemove", (e) => {
        //     // gasp.set(clipped, {
        //     //     x:e.clientX,
        //     //     y:e.clientY,
        //     // })
        //     const gb = gallery.getBoundingClientRect();
        //     const left = gb.left;
        //     const width = gb.width;
        //     let x = e.clientX - left;
        //     gsap.set(clipped, {
        //         clipPath: `inset(0px 0px 0px ${x}px)`,
        //     });
        //     ratio = x / width;

        //     gsap.set(".dragger", {
        //         x: x,
        //     });

        //     gsap.set(document.querySelector(".dragger:after"), {
        //         cssRule: {
        //             transform: "translateY(" + e.clientY + "px)",
        //         },
        //     });
        // });

        let ratio = 0.5;

        const draggable = new Draggable(".dragger", {
            type: "x",
            bounds: ".gallery",
            onDrag: onDrag,
        });

        window.addEventListener("resize", onResize);
        onResize();

        function onDrag() {
            const width = gallery.getBoundingClientRect().width;
            gsap.set(clipped, {
                clipPath: `inset(0px 0px 0px ${draggable.x}px)`,
            });
            ratio = draggable.x / width;
        }

        function onResize() {
            const width = gallery.getBoundingClientRect().width;
            const x = ratio * width;

            gsap.to(
                ".dragger",
                {
                    x: x,
                    ease: "expo.out",
                    duration: 1,
                    opacity: 1,
                },
                1
            );

            gsap.to(
                clipped,
                {
                    clipPath: `inset(0px 0px 0px ${width - x}px)`,
                    ease: "expo.out",
                    duration: 1,
                },
                1
            );

            draggable.update(true);
        }
    },
};
</script>
<style scoped>
.gallery {
    position: relative;
    max-height: 800px;
}

.gallery img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    max-height: 300px;
}
@screen md {
    .gallery img {
        max-height: 400px;
    }
}
@screen lg {
    .gallery img {
        max-height: 600px;
    }
}
@screen 2xl {
    .gallery img {
        max-height: 800px;
    }
}

.dragger {
    top: 0;
    width: 5px;
    height: 100%;
    background: #fff;
    position: absolute;
    z-index: 10;
    transform: translateX(-100%);
    opacity: 0;

    cursor: w-resize;
}

.dragger:after {
    cursor: w-resize;
    content: url("data:image/svg+xml,%3Csvg width='40px' height='40px' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:none;stroke:%23000;stroke-linecap:round;stroke-linejoin:bevel;stroke-width:1.5px;%7D%3C/style%3E%3C/defs%3E%3Cg id='ic-chevron-left-right'%3E%3Cpath class='cls-1' d='M15.3,16.78l4.11-4.11a1,1,0,0,0,0-1.41l-4-4'/%3E%3Cpath class='cls-1' d='M8.7,7.22,4.59,11.33a1,1,0,0,0,0,1.41l4,4'/%3E%3C/g%3E%3C/svg%3E");
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.219);
}

@screen lg {
    .dragger:after {
        width: 65px;
        height: 65px;
    }
}

.clipped {
    position: absolute;
    top: 0;
    clip-path: inset(0px 0px 0px 0px);
}

/* @media only screen and (max-width: 699px) {
  .gallery {
    transform:scale(50%);
    transform-origin: 0 0;
    position:relative;
    left:-20%;
  }
  body {
    display:block;
  }



} */
</style>
