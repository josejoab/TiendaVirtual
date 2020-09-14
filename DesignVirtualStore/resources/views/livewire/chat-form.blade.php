<div>
   
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" wire:model="name">
        @error("name") <small class="text-danger">{{$message}}</small>@enderror
    </div>
   
    <div class="form-group">
        <label for="name">Message</label>
        <input type="text" class="form-control" id="message" wire:model="message">
        @error("message") <small class="text-danger">{{$message}}</small>@enderror
    </div>

    <button class="btn btn-primary" wire:click="sendMessage">Send Message</button>

    <div style="position: absolute;"
        class="alert alert-success collapse mt-3"
        role="alert" id="successful"> Message has been sent
    </div>

    <script>
        window.livewire.on('messageSent', function(){
            $("#successful").fadeIn("slow");
            setTimeout(function(){$("#successful").fadeOut("slow");}, 3000);
        });
    </script>
</div>

