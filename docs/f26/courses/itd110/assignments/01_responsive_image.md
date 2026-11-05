<!-- competencies: V55 V76 V77 N12 N20 N21 N36 W1.5 W3.1 -->

# Responsive Homepage Image

## Assignment Purpose

Add a meaningful image to your homepage, using `srcset` so that browsers can pick
the right size for each device, and document your right to use the image.

## Requirements

Start thinking about the website that you'll build for your year-long project.
Update the text on your `index.html` page to reflect that purpose, and add a
meaningful, professional picture. If your page is a personal portfolio, you might
choose a picture of yourself or a picture from a project you're especially proud of.

Follow these steps:

- First, make a new directory in your repo called `images`
- Select the image that you would like to include, and produce at least three
  different versions. [Follow these instructions to reduce your image's file size](https://support.apple.com/guide/preview/crop-resize-or-rotate-an-image-prvw2015/mac#:~:text=image's%20file%20size-,Go%20to%20the%20Preview%20app%20on%20your%20Mac.,value%20in%20the%20Resolution%20field.).
  Use these file sizes:
    - small (320 × 240 pixels)
    - medium (640 × 480 pixels)
    - large (1024 × 768 pixels)
- Give each of these files reasonable names and add them to your `images` folder.
- Add this image to your `index.html` file, and use the `srcset` attribute to link
  the alternate versions.

### Image Responsibility

Images are protected by copyright law, and you must have the photographer's
permission to use an image. Regardless of where your image comes from, you must
document your sources. For now, include an HTML comment that explains where your
image comes from. If you took the image yourself, that's all you need to say. If
you found your image online, give the URL of the site you got the image from, and
a link to any licensing information on that website.

## Submission

Commit and push your `index.html` and `images/` folder. Check that DUCK can see it:
<https://duck.apscs.org/file_list?path=index.html>

## Grading

- 5 points: The image loads, you have valid srcset code, and attributed the source
- 4 points: The image loads and your srcset code is close, but has minor errors,
  and you attributed your source
- 3 points: The image loads but you are missing srcset entirely or it is very
  wrong, and you attributed your source
- 2 points: You tried to add an image but it doesn't load, or you did not
  attribute your source
- 0 points: No image
