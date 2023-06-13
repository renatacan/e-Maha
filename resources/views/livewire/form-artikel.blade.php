<div>
    <form wire:submit.prevent="simpan">
                    <div class="form-group">
                        <label>Judul</label>
                        <input wire:model="judul" type="text" name="" class="form-control" placeholder="Entry Your Title">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea wire:model="deskripsi" id="" name="" cols="30" rows="10" class="form-control" placeholder="Entry Your Description"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">SUBMIT</button>
                    </div>
                </form>
</div>
