@extends('components.Layout')

@section('title', 'HTML Roadmap - Welcome')

@section('content')
<header>
    <h1>HTML Roadmap</h1>
</header>

<div class="container">
    <h2>What to Expect</h2>
    <ul class="toc">
        <li>
            <strong>1. Introduction to HTML</strong>
            <p>Learn about the basic concepts of HTML, its purpose, and how it integrates with web technologies.</p>
            <p>HTML is the backbone of web development. It allows you to create structured documents that browsers can render. This chapter covers the history of HTML and its evolution into HTML5.</p>
        </li>
        <li>
            <strong>2. Basic HTML Structure</strong>
            <p>Understand the structure of an HTML document, including the <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, and <code>&lt;body&gt;</code> tags.</p>
            <p>This chapter will guide you through the anatomy of an HTML page, emphasizing the importance of each section and how they interact with CSS and JavaScript.</p>
        </li>
        <li>
            <strong>3. HTML Elements and Attributes</strong>
            <p>Explore various HTML elements such as headings, paragraphs, links, images, and how to use attributes to enhance them.</p>
            <p>Learn about the most common elements and their attributes, including <code>href</code> for links, <code>src</code> for images, and how attributes affect the rendering and functionality of your elements.</p>
        </li>
        <li>
            <strong>4. Forms and Input</strong>
            <p>Learn how to create forms for user input, including text fields, radio buttons, checkboxes, and submit buttons.</p>
            <p>This chapter focuses on form creation and handling user input. You'll learn about the <code>&lt;form&gt;</code> element and various input types, as well as form validation and accessibility considerations.</p>
        </li>
        <li>
            <strong>5. Multimedia in HTML</strong>
            <p>Discover how to embed images, audio, and video into your web pages using the appropriate HTML elements.</p>
            <p>This chapter will cover the <code>&lt;img&gt;</code>, <code>&lt;audio&gt;</code>, and <code>&lt;video&gt;</code> tags, including attributes for controlling playback and ensuring compatibility across browsers.</p>
        </li>
        <li>
            <strong>6. Semantic HTML</strong>
            <p>Understand the importance of semantic elements for better accessibility and SEO, including <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;article&gt;</code>, and <code>&lt;section&gt;</code>.</p>
            <p>Learn how semantic HTML enhances the meaning of your content, making it more accessible to screen readers and search engines. This chapter includes best practices for structuring your HTML for maximum clarity and SEO benefits.</p>
        </li>
        <li>
            <strong>7. HTML Best Practices</strong>
            <p>Learn best practices for writing clean and maintainable HTML code, including proper indentation, use of comments, and validation.</p>
            <p>This chapter emphasizes the importance of writing readable code. You'll explore tools for validating HTML and ensuring your code adheres to web standards, which is crucial for cross-browser compatibility.</p>
        </li>
        <li>
            <strong>8. HTML5 New Features</strong>
            <p>Explore new features introduced in HTML5, such as native video and audio support, the <code>&lt;canvas&gt;</code> element, and improved form controls.</p>
            <p>This chapter introduces the latest HTML5 features that enhance user experience and interactivity. You'll learn how to implement these features in your projects effectively.</p>
        </li>
    </ul>
</div>

@endsection
