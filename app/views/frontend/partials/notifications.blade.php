<script id="notification-two-tpl" type="text/template">
    <div class="notification-box <%= type %> two-columns <%= effect %> ns-hide">
        <span class="notification-box-text-left"><%= message.left %></span>
        <span class="notification-box-text-right"><%= message.right %></span>
        <a href="#" class="ns-close">&times;</a>
    </div>
</script>

<script id="notification-one-tpl" type="text/template">
    <div class="notification-box <%= type %> one-columns <%= effect %> ns-hide">
        <span class="notification-box-text"><%= message.message %></span>
        <a href="#" class="ns-close">&times;</a>
    </div>
</script>