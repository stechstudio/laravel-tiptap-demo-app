import { Editor } from "@tiptap/core";
import StarterKit from "@tiptap/starter-kit";
import Link from "@tiptap/extension-link";
import TextStyle from "@tiptap/extension-text-style";
import Color from "@tiptap/extension-color";
import Alpine from 'alpinejs';

window.Editor = Editor;
window.StarterKit = StarterKit;
window.Link = Link;
window.TextStyle = TextStyle;
window.Color = Color;
window.Alpine = Alpine;

Alpine.start();
