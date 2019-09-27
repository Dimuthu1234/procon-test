<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <Gallery :images="images" ></Gallery>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <b>Top of Props</b>
                    <img src="images/topprops.jpg">
                </div>
                <div class="row">
                    <b>Top Tags</b>
                    <ul class="tags">
                        <li><a href="#" class="tag">Popular</a></li>
                        <li><a href="#" class="tag">Flower</a></li>
                        <li><a href="#" class="tag">Foods</a></li>
                        <li><a href="#" class="tag">Sports</a></li>
                        <li><a href="#" class="tag">Natural</a></li>
                        <li><a href="#" class="tag">Music</a></li>
                        <li><a href="#" class="tag">Travel</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Gallery from "vue-cover-gallery"
    export default {

        name: "Example",
        components: {
            Gallery
        },
        data() {
            return {
                images: [
                    {
                        title: "image 1",
                        description: "description about image 1",
                        href: "images/5.jpg"
                    },
                    {
                        title: "image 2",
                        description: "description about image 2",
                        href: "images/2.jpg"
                    },
                    {
                        title: "image 3",
                        description: "description about image 3",
                        href: "images/3.jpg"
                    },
                    {
                        title: "image 4",
                        description: "description about image 4",
                        href: "images/4.jpg"
                    },
                    {
                        title: "image 1",
                        description: "description about image 5",
                        href: "images/6.jpg"
                    },
                    {
                        title: "image 6",
                        description: "description about image 6",
                        href: "images/5.jpg"
                    }
                ],
            };
        },
    };
</script>

<style scoped>
    body {
        font: 12px/1.5 'PT Sans', serif;
        margin: 25px;
    }
    .tags {
        list-style: none;
        margin: 0;
        overflow: hidden;
        padding: 0;
    }

    .tags li {
        float: left;
    }

    .tag {
        background: #eee;
        border-radius: 3px 0 0 3px;
        color: #999;
        display: inline-block;
        height: 26px;
        line-height: 26px;
        padding: 0 20px 0 23px;
        position: relative;
        margin: 0 10px 10px 0;
        text-decoration: none;
        -webkit-transition: color 0.2s;
    }

    .tag::before {
        background: #fff;
        border-radius: 10px;
        box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
        content: '';
        height: 6px;
        left: 10px;
        position: absolute;
        width: 6px;
        top: 10px;
    }

    .tag::after {
        background: #fff;
        border-bottom: 13px solid transparent;
        border-left: 10px solid #eee;
        border-top: 13px solid transparent;
        content: '';
        position: absolute;
        right: 0;
        top: 0;
    }

    .tag:hover {
        background-color: crimson;
        color: white;
    }

    .tag:hover::after {
        border-left-color: crimson;
    }
</style>
